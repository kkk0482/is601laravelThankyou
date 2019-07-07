<?php
/**
 * Created by PhpStorm.
 * User: kkham
 * Date: 7/7/2019
 * Time: 3:29 PM
 */


class PageController extends Controller
{
    function index()
    {
        return view('pages.index');
    }

    function about()
    {
        return view('pages.about');
    }

    function contact()
    {
        return view('pages.contact');
    }

    function store(Request $request)
    {
        $name = $request->name;

        return redirect()->route('thanks', ['name' => $name]);
    }

    function thanks($name, Request $request)
    {
        return view('pages.thankyou')->with(compact('name'));
    }

}