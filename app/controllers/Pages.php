<?php
class Pages extends controller
{
    public function __construct()
    {
        $this->postModel = $this->model('Post');
    }
    public function index()
    {$posts= $this->postModel->get_elements();
         $data=['title'=>'ayoub',
                 'posts'=> $posts
        ];

         $this->view('Pages/index',$data);
    }
    public function about()
    {$posts= $this->postModel->get_elements();
        $data=['title'=>'ayoub',
                'posts'=> $posts
       ];
        $data=['title'=>'ayoub'];
        $this->view('Pages/about',$data);
    }
}