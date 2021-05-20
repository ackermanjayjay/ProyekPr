<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['nama']='Robotika FT UMJ';
		$data['halaman']='Halaman Index';
		$data['data_index'] = [
			[
				'question' => 'Apa itu Robotika?',
				'answer' => 'Adalah salah satu cabang teknik, tepatnya dari mekatronika,
				 yang mempelajari dan mengembangkan metode yang memungkinkan robot untuk melakukan tugas tertentu dengan secara otomatis mereproduksi pekerjaan manusia.'
			],
			[
				'question' => 'Untuk apa belajar Robotika?',
				'answer' => 'Melatih kerjasama dalam kelompok dan meningkatkan kepercayaan diri, menerima dan menghargai pendapat orang lain 
				serta berani menyatakan atau menampilkan ide kreatifnya.'
			],
			[
				'question' => 'Bahasa yang digunakan dalam arduino?',
				'answer' => 'Bahasa pemrograman Arduino pada dasarnya menggunakan bahasa pemograman C. Bahasa C sendiri merupakan bahasa tingkat tinggi yang sangat populer dan banyak digunakan oleh para programmer'
			]
		];
	
		return view('welcome_message',$data);

	}
}
