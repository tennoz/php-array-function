<?php

  class Task {

    public $title;

    public $person;

    public $status;

    public function __construct($title, $person, $status) {

      $this->title = $title;

      $this->person = $person;

      $this->status = $status;
    }
  }


    $tasks = [
      new Task('Clean the room', 'Ahmad', true),
      new Task('Fix the computer', 'Muhammad', true),
      new Task('Buy some stuff', 'Hamada', false),
      new Task('Dstroy the city', 'Army', true),
    ];



    // $done = array_filter($tasks, function($task) {
    //   return $task->status;
    // });
    //
    // var_dump($done);
    //
    // $undone = array_filter($tasks, function($task) {
    //   return ! $task->status;
    // });
    //
    // var_dump($undone);



    // $modified = array_map(function($task) {
    //   $task->status = true;
    //   return ['title' =>$task->title];
    // }, $tasks);
    //
    // var_dump($modified);



    // $modified = array_map(function($task) {
    //   return $task->title;
    // }, $tasks);
    //
    // var_dump($modified);


    // foreach ($tasks as $task) {
    //   $task->status = true;
    // }
    // var_dump($tasks);

    // $title = array_column($tasks, 'title');
    // var_dump($title);



    // foreach ($tasks as $index => $task) {
    //   $tasks[$index] = (array) $task;
    // }
    // var_dump($tasks);
    //



    // ????
    // foreach ($tasks as $task) {
    //   $tasks = (array) $task;
    // }
    // var_dump($tasks);
    // ????


    // $posts = array_map(function($post) {
    //   return (array) $post;
    // }, $posts);


    // $tasks = array_map(function($task) {
    //   return (array) $task;
    // }, $tasks);
    // var_dump($tasks);


    // $titles = array_column($posts, 'author', 'title');


    // $persons = array_column($tasks, 'person', 'title');
    //
    // var_dump($persons);
 ?>
