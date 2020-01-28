<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;
use JWTAuth;
use Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;

class BukuController extends Controller
{

  public function index(){
    if(Auth::user()->level=="admin"){
      $dt_bk=Buku::get();
      return response()->json($dt_bk);
    } else{
      return response()->json(['status'=>'anda bukan admin']);
    }
  }

  public function store(Request $request){
    $validator=Validator::make($request->all(),
      [
        'judul'=>'required',
        'penerbit'=>'required',
        'pengarang'=>'required',
        'stok'=>'required',
        'gambar'=>'required'
      ]
    );

    if($validator->fails()){
      return Response()->json($validator->errors());
    }

    
    $simpan=Buku::create([
      'judul'=>$request->judul,
      'penerbit'=>$request->penerbit,
      'pengarang'=>$request->pengarang,
      'stok'=>$request->stok,
      'gambar'=>$request->gambar


    ]);
    $status=1;
    $message="Buku Berhasil Ditambahkan";
    if($simpan){
      return Response()->json(compact('status','message'));
    }else {
      return Response()->json(['status'=>0]);
    }
  }

  public function update($id,Request $request){
    $validator=Validator::make($request->all(),
      [
        'judul'=>'required',
        'penerbit'=>'required',
        'pengarang'=>'required',
        'stok'=>'required',
        'gambar'=>'required'
      ]
  );

    if($validator->fails()){
    return Response()->json($validator->errors());
  }

    $ubah=Buku::where('id',$id)->update([
      'judul'=>$request->judul,
      'penerbit'=>$request->penerbit,
      'pengarang'=>$request->pengarang,
      'stok'=>$request->stok,
      'gambar'=>$request->gambar
    ]);
    $status=1;
    $message="Buku Berhasil Diubah";
    if($ubah){
      return Response()->json(compact('status','message'));
    }else {
      return Response()->json(['status'=>0]);
    }
  }

  public function tampil_buku(){
    $data_buku=Buku::get();
    $count=$data_buku->count();
    $arr_data=array();
    foreach ($data_buku as $dt_bk){
      $arr_data[]=array(
        'id' => $dt_bk->id,
        'judul' => $dt_bk->judul,
        'penerbit' => $dt_bk->penerbit,
        'pengarang' => $dt_bk->pengarang,
        'stok' => $dt_bk->stok,
        'gambar' => $dt_bk->gambar
      );
    }
    $status=1;
    return Response()->json(compact('status','count','arr_data'));
  }

  public function destroy($id){
    $hapus=Buku::where('id',$id)->delete();
    $status=1;
    $message="Buku Berhasil Dihapus";
    if($hapus){
      return Response()->json(compact('status','message'));
    }else {
      return Response()->json(['status'=>0]);
    }
  }
}
