<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('check_email',function(){
	$data['header_banner'] = 'https://getcomposer.org/img/logo-composer-transparent2.png';
	$data['header_image'] = 'https://getcomposer.org/img/logo-composer-transparent5.png';
	$data['text_paragraph'] = 'say hello';
	$data['link_to'] = 'https://getcomposer.org';
	$data['link_text'] = 'GGWP';

	return view('emails.hello')->with($data);

});

// Route::get('send',function()
// {
// 	Mail::to('soffandluffy@gmail.com')
// 				->send('Whats Up?');
// });

Route::get('send',function()
{
	$data['header_banner'] = 'https://getcomposer.org/img/logo-composer-transparent2.png';
	$data['header_image'] = 'https://getcomposer.org/img/logo-composer-transparent5.png';
	$data['text_paragraph'] = 'say hello';
	$data['link_to'] = 'https://getcomposer.org';
	$data['link_text'] = 'Watafak';

	Mail::send('emails.hello',$data,function($n)
	{
		//set where email from
		$n->from('musyaffa560@gmail.com','Kennedy KEY');
		//set recipient
		$n->to('ariefsetya@live.com');
		//set subject
		$n->subject('Whats Up? from '.gethostname(). ' Kennedy XI RPL');
		//set carbon copy
		$n->cc('mail@mailinator.com');
		//set blind carbon copy
		$n->bcc('mail@mailinator.com');

		//attach file
		$n->attach(storage_path(' HD-1080p-Wallpaper-797.jpg'));
	});

	echo "sent";
});

// Route::group(['prefix'=>'admin'],function()
// {
// 	Route::group(['prefix'=>'country'],function(){
// 		Route::get('add',function(){
// 			echo "ini Pulpen";
// 		});
// 		Route::get('index',function(){
// 			echo "ini Permen Mint";
// 		});
// 		Route::get('edit',function(){
// 			echo "daripada gigit pulpen";
// 		});
// 	});
// 	Route::group(['prefix'=>'province'],function(){
// 		Route::get('add',function(){
// 			echo "mending";
// 		});
// 		Route::get('index',function(){
// 			echo "gigit";
// 		});
// 		Route::get('edit',function(){
// 			echo "perment mint";
// 		});
// 	});
// });