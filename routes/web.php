<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings', [
        "heading" => "latest listings",
        "listings" => [
            [
                "id" => 1,
                "title" => "listing one",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi enim animi ipsam, nostrum impedit vero ea modi rerum, cupiditate harum placeat, iusto non optio porro sit? Ad distinctio beatae repudiandae?
Deleniti animi, quibusdam voluptates assumenda, distinctio cumque vel nobis quia aut totam alias necessitatibus, ut commodi tempore eius incidunt facere dolores doloremque voluptas error nesciunt sint ipsum quo. Impedit, pariatur?
Repudiandae, sed tempora vero omnis, minima iusto dolore cumque reprehenderit laboriosam tenetur odit accusamus esse aut quod facere magnam eum sit! Eligendi consectetur impedit aperiam nihil laudantium, eaque ea ipsum.
Eius harum dolores amet est, iste vitae quod explicabo libero ipsa repellat autem provident fuga vero, temporibus dolor laborum consequuntur! Quo consequatur fuga aut rem. Ipsa illum officiis eum animi.
Suscipit facere, sequi et vero rerum impedit? Culpa ullam ex pariatur possimus, repellendus iure velit architecto temporibus eveniet optio nostrum cum dolor! Necessitatibus corrupti quas totam pariatur recusandae neque sapiente."
            ],
            [
                "id" => 2,
                "title" => "listing two",
                "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi enim animi ipsam, nostrum impedit vero ea modi rerum, cupiditate harum placeat, iusto non optio porro sit? Ad distinctio beatae repudiandae?
Deleniti animi, quibusdam voluptates assumenda, distinctio cumque vel nobis quia aut totam alias necessitatibus, ut commodi tempore eius incidunt facere dolores doloremque voluptas error nesciunt sint ipsum quo. Impedit, pariatur?
Repudiandae, sed tempora vero omnis, minima iusto dolore cumque reprehenderit laboriosam tenetur odit accusamus esse aut quod facere magnam eum sit! Eligendi consectetur impedit aperiam nihil laudantium, eaque ea ipsum.
Eius harum dolores amet est, iste vitae quod explicabo libero ipsa repellat autem provident fuga vero, temporibus dolor laborum consequuntur! Quo consequatur fuga aut rem. Ipsa illum officiis eum animi.
Suscipit facere, sequi et vero rerum impedit? Culpa ullam ex pariatur possimus, repellendus iure velit architecto temporibus eveniet optio nostrum cum dolor! Necessitatibus corrupti quas totam pariatur recusandae neque sapiente."
            ]
        ]
    ]);
});
Route::get('/hello', function () {
    return response('<p>fef</p>', 200)
        ->header("Content-Type", "text/plain");
});
Route::get("/posts/{id}", function ($id) {
    ddd($id);
    return response("Post " . $id);
})->where("id", "[0-9]+");
Route::get("/search", function (Request $request) {
    return $request->name . " " . $request->city;
});
