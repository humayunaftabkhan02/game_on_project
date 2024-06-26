<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsArticle;

class NewsArticleController extends Controller
{
    public function index()
    {
        $newsArticles = NewsArticle::all();
        return view('news.index', compact('newsArticles'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        NewsArticle::create($request->all());

        return redirect()->route('news.index')->with('success', 'News article created successfully.');
    }

    public function show(NewsArticle $newsArticle)
    {
        return view('news.show', compact('newsArticle'));
    }

    public function edit(NewsArticle $newsArticle)
    {
        return view('news.edit', compact('newsArticle'));
    }

    public function update(Request $request, NewsArticle $newsArticle)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $newsArticle->update($request->all());

        return redirect()->route('news.index')->with('success', 'News article updated successfully.');
    }

    public function destroy(NewsArticle $newsArticle)
    {
        $newsArticle->delete();

        return redirect()->route('news.index')->with('success', 'News article deleted successfully.');
    }
}