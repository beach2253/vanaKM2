<?php

namespace App\Http\Controllers;

use App\Models\document_request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use League\CommonMark\Node\Block\Document;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\Storage;


class DocumentRequestController extends Controller
{
    //
    public function index(){
        return view('documents.index',[
            'documents'=>document_request::all(),
        ]);
    }

    public function show(){
        // dd (Auth::user()->document_request);
        return view('document.regis',[
            'documents'=>Auth::user()->document_request,
        ]);
    }
    public function manage(){
        // dd (Auth::user()->document_request);
        return view('document.regis',[
            'documents'=>document_request::all(),
        ]);
    }
    
    public function create(request $add){
        // dd($add);
        //ตรวจสอบข้อมูล
        $add->validate([
                // 'Doc_Name' => 'required|unique:document_requests|max:10'
                // 'file'=>'required'
            ],
            [
                // 'Doc_Name.required' => "กรุณาป้อนชื่อเอกสาร",
                // 'Doc_Name.max' => "ห้ามป้อนเเกิน 10 ตัวอักษร"
                // 'file'=>'กรุณาเลือกไฟล์ PDF'
            ]
        );

        //อัพโหลดไฟล์
        // $name = $add->file('file');
        // $path = $add->file('file')->create('public/files');
        
        // $save = new File;
        // $save->name = $name;
        // $save->path = $path;
        
        
        $file = $add->file('file');
        $docver = document_request::where('Doc_Name',$add->Doc_Name)->count();
        $docname = $add->Doc_Name;
        $NameFile = $docname.'-'.$docver;
        // dd($NameFile);

        $upload_location = '/FilePDF/';
        $full_path = $upload_location.$NameFile;
        // dd($full_path);

        
        // //บันทึกข้อมูล 
        $documents = new document_request;
        $documents->Doc_Code = $add->DocCode;
        $documents->Doc_Name = $add->Doc_Name;
        $documents->User_id = Auth::user()->id;
        $documents->Doc_Type = $add->type;
        $documents->Doc_Obj = $add->objective;
        $documents->Doc_Description = $add->info;
        $documents->Doc_Life = $add->Year;
        // dd($add->Doc_Name);
        $documents->Doc_ver = $docver;
        $documents->Doc_StartDate = $add->usedate;
        $documents->Doc_Location = $full_path;
        $documents->Doc_Status ='1';
        $documents->Doc_Timestamp = $add->date;
        // document_request::count(Doc_Name);
        //upload PDF
        // dd($documents);
        //dd( $add->file('file') );
        // dd($file->getClientOriginalName());
        Storage:: move( $upload_location, $file);


                            // loc / upload file / rename to
        Storage::putFileAs($upload_location,$file,$docname.'-'.$docver);
        // Storage::putFileAs($upload_location,$file,doc_name.'-'.ver);

        $visibility = Storage::getVisibility($upload_location);
        // dd($visibility);


        // gettype($add);
        
        // dd( Storage::disk('local') );
        // $add->file($NameFile)->store($upload_location);

         // dd($documents);
        $documents->save();
        return view('document.create');
       
    }

    public function approve(request $add){
        // dd('approve',$id,$add->regID,$add->manage);
        // echo $add->manage;
        // dd($add->id);

        // dd(document_request::find($add->id));
        
        Mail::send(['text'=>'mail'], array('name'=>"Virat Gandhi"), function($message) {
            $message->to('maggotgluon@gmail.com', 'Tutorials Point')->subject('Laravel Basic Testing Mail');
            $message->from('ruttaphong.w@vananava.com','KM Service');
            // $message->body('test');
            // dd($message);
         });
        
        // dd(route::class,'regisManage');
        // return view('document.regis',[
        //     'documents'=>document_request::all(),
        // ]);
        return redirect()->route('regisManage');
    }
}
