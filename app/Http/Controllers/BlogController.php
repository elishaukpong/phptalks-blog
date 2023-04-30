<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Services\ModelServiceInterface;

class BlogController extends Controller
{
    public function __construct(protected ModelServiceInterface $blogService)
    {}

    public function index()
    {
        return view('blogs.index', ['entities' => $this->blogService->getAll()]);
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(BlogRequest $request)
    {
        try {
            $this->blogService->create($request->all());
        }catch(\Throwable $e){
            report($e);

            return redirect()->back()
                ->withInput()
                ->with('error', 'Something went wrong');
        }

       return redirect('blogs');
    }
}
