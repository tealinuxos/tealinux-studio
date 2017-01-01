<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Tasks;
use App\Build;
use Redirect;
use Session;


class TaskController extends Controller
{

    public function all(Request $request)
    {

        if($request->user()->is_admin())
        {
            $tasks = Tasks::paginate(7);

        } else
        {
            $tasks = Tasks::where('user_id', $request->user()->id)->paginate(15);


        }

      $title = 'Semua Task';
      //return home.blade.php template from resources/views folder
      return view('tasks.index')->withTasks($tasks)->withTitle($title);


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //fetch 5 posts from database which are active and latest
      $tasks = Tasks::where('status',1)->orderBy('created_at','desc')->paginate(5);
      //page heading
      $title = 'Tasks Terbaru';

      //return home.blade.php template from resources/views folder
      return view('tasks.index')->withTasks($tasks)->withTitle($title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      // if user can post i.e. user is admin or author


        if($request->user()->is_first_time == 0)
        {
            $username = $request->user()->username;

            exec ("sudo /usr/res/scripts/create_user.sh $username");

            $user = User::find($request->user()->id);
            $user->is_first_time = 1;
            $user->save();
            Session::flash('first_time','Pertama Kali.');
        }
        return view('tasks.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $task = new Tasks();
      $task->nama_os = $request->get('nama_os');
      $task->deskripsi = $request->get('deskripsi');
      $task->slug = str_slug($task->nama_os);
      $task->user_id = $request->user()->id;
      $task->theme = $request->get('theme');
      $task->wallpaper = $request->get('wallpaper');
      $task->icon = $request->get('icon');
      $task->nama_file_iso = $request->user()->username . '-' . $request->get('nama_os') . '.iso';
      // menampung id semua aplikasi yang ditambakan
      $aplikasi_ditambahkan = null;
      // cek if empty
      if(!empty($request->get('list_aplikasi_office'))){
        $aplikasi_ditambahkan = $aplikasi_ditambahkan . implode(",", array_filter($request->get('list_aplikasi_office'))) . ",";
      }
      if(!empty($request->get('list_aplikasi_music'))){
        $aplikasi_ditambahkan = $aplikasi_ditambahkan . implode(",", array_filter($request->get('list_aplikasi_music'))) . ",";
      }
      if(!empty($request->get('list_aplikasi_video'))){
        $aplikasi_ditambahkan = $aplikasi_ditambahkan . implode(",", array_filter($request->get('list_aplikasi_video'))) . ",";
      }
      if(!empty($request->get('list_aplikasi_internet'))){
        $aplikasi_ditambahkan = $aplikasi_ditambahkan . implode(",", array_filter($request->get('list_aplikasi_internet'))) . ",";
      }
      if(!empty($request->get('list_aplikasi_chat'))){
        $aplikasi_ditambahkan = $aplikasi_ditambahkan . implode(",", array_filter($request->get('list_aplikasi_chat'))) . ",";
      }
      if(!empty($request->get('list_aplikasi_graphics'))){
        $aplikasi_ditambahkan = $aplikasi_ditambahkan . implode(",", array_filter($request->get('list_aplikasi_graphics'))) . ",";
      }
      if(!empty($request->get('list_aplikasi_reading'))){
        $aplikasi_ditambahkan = $aplikasi_ditambahkan . implode(",", array_filter($request->get('list_aplikasi_reading'))) . ",";
      }
      if(!empty($request->get('list_aplikasi_game'))){
        $aplikasi_ditambahkan = $aplikasi_ditambahkan . implode(",", array_filter($request->get('list_aplikasi_game'))) . ",";
      }
      if(!empty($request->get('list_aplikasi_development'))){
        $aplikasi_ditambahkan = $aplikasi_ditambahkan . implode(",", array_filter($request->get('list_aplikasi_development'))) . ",";
      }
      if(!empty($request->get('list_aplikasi_system'))){
        $aplikasi_ditambahkan = $aplikasi_ditambahkan . implode(",", array_filter($request->get('list_aplikasi_system'))) . ",";
      }
      if(!empty($request->get('list_aplikasi_other'))){
        $aplikasi_ditambahkan = $aplikasi_ditambahkan . implode(",", array_filter($request->get('list_aplikasi_other'))) . ",";
      }


      $task->list_aplikasi = $aplikasi_ditambahkan;

      $task->save();
      $message = 'Task berhasil dibuat';
      return redirect('task/after/'.$task->slug)->withMessage($message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      $task = Tasks::where('slug',$slug)->first();
      if(!$task)
      {
       return redirect('/')->withErrors('Halaman yang kamu minta tidak ditemukan');
      }
      return view('tasks.show')->withTask($task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $task = Tasks::where('id', $id)->first();
        return view('tasks.edit')->withTask($task);
//      $task = Tasks::where('slug',$slug)->first();
//      if($task && ($request->user()->id == $task->user_id || $request->user()->is_admin()))
//        return view('tasks.edit')->with('task',$task);
//      return redirect('/')->withErrors('Kamu tidak boleh mengakses halaman');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $task_id = $request->input('task_id');
        $task = Tasks::find($task_id);
        if($task && ($task->user_id == $request->user()->id || $request->user()->is_admin()))
        {
          $title = $request->input('title');
          $slug = str_slug($title);
          $duplicate = Posts::where('slug',$slug)->first();
          if($duplicate)
          {
            if($duplicate->id != $task_id)
            {
              return redirect('task/edit/'.$task->slug)->withErrors('Judul yang sama sudah pernah dibuat.')->withInput();
            }
            else
            {
              $task->slug = $slug;
            }
          }
          $task->nama_os = $nama_os;
          $task->deskripsi = $request->input('deskripsi');
          if($request->has('save'))
          {
            $task->status = 0;
            $message = 'Task berhasil disimpan';
            $landing = 'task/edit/'.$task->slug;
          }
          else {
            $task->active = 1;
            $message = 'Task berhasil di perbaharui';
            $landing = $task->slug;
          }
          $task->save();
               return redirect($landing)->withMessage($message);
        }
        else
        {
          return redirect('/')->withErrors('Kamu tidak boleh mengakses halaman');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
        $task = Tasks::find($id);
        if($task && ($task->user_id == $request->user()->id || $request->user()->is_admin()))
        {
          $task->delete();
            Session::flash('message','Task kamu telah di hapus');

        }
        else
        {
            Session::flash('message','Invalid Operation. Kamu tidak boleh mengakses halaman');

        }
        return redirect('/task/all');
    }
    public function after(Request $request)
    {

        return view('tasks.after');
    }
    public function build(Request $request, $id)
    {

      $build = new Build();

      $build->task_id = $id;
      $build->sudah_jadi = 0;
      return view('tasks.after');
    }
}
