<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Orders;


class OrdersController extends Controller
{


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'project_name' => ['required', 'string'],
            'number_of_words' => ['required', 'integer'],
            'total_cost' => ['required', 'integer'],
            'payment_status' => ['string','nullable'],
            'status' => ['string','nullable'],
            'project_type' => ['required', 'string'],
            'category' => ['required', 'string'],
            'sub_category' => ['required', 'string'],
            'requested_turnaround_time' => ['required', 'string'],
            'journal_Specific_formatting' => ['required', 'string'],
            'file' => ['required', 'file'],
            'english_style'=>['required','string'],
            'comment'=>['string','nullable'],

        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {if(auth()->user()->isAdmin() )
        {
        return view('admin-page.orders.all-orders');
    }
    else{
        return view('home-page.index');
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home-page.services.manuscript-edit-form');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){



        $data=new Orders();
        $data->project_name=$request->input('project_name');
        $data->project_type=$request->input('project_type');
        $data->number_of_words=$request->input('number_of_words','Kelime sayısı hesaplanıyor');
        $data->total_cost=$request->input('total_cost','-');
        $data->payment_status=$request->input('payment_status','-');
        $data->status=$request->input('status','-');
        $data->category=$request->input('category','-');
        $data->sub_category=$request->input('sub_category','-');
        $data->requested_turnaround_time=$request->input('requested_turnaround_time','72');
        $data->journal_Specific_formatting=$request->input('journal_Specific_formatting','-');
        $data->english_style=$request->input('english_style','-');
        $data->comment=$request->input('comment');
        $data->user_id=auth()->id();
        $data->file=Storage::putFile('' ,$request->file('file'));
        $data->save();
        return redirect('/orders/user')->with('success', 'Projeniz başarı bir şekilde gönderildi.');



    }


    public function showAll(){
        if(auth()->user()->isAdmin() )
        { //$orderss = \App\Orders::all();


       $newor=DB::select("SELECT s.*,u.name as uyeadsoyad,u.email as emaill FROM orders s, users u WHERE u.id=s.user_id ");

       return view('admin-page.orders.all-orders',compact('newor'));
      //  return view('admin-page.orders.all-orders')->with('orderss',$orderss);
    }
    else{
        return view('home-page.index');
    }
    }



 /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function downloadfile($file)
    {
        if(auth()->user()->isAdmin() )
        {
        $pathToFile = storage_path('app' . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . $file );

        return Response::download($pathToFile);

    }
    else{
        return view('home-page.index');
    }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(auth()->user()->isAdmin() )
        {
     $orderdetay = \App\Orders::FindOrFail($id);
        $order=DB::select("SELECT s.*,u.name as uyeadsoyad,u.email as emaill FROM orders s, users u WHERE
        u.id=s.user_id AND s.id=? ", [$id]);

        return view('admin-page.orders.vieworder',compact('orderdetay','order'));

    }
    else{
        return view('home-page.index');
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {if(auth()->user()->isAdmin() )
        {
        //
        DB::table('orders')
        ->where('id',$id)
        ->update([
        'status'=>$request->status,
        'payment_status'=>$request->payment_status,
        'number_of_words'=>$request->number_of_words,
        'total_cost'=>$request->total_cost

        ]);
        return redirect ("orders/all")->with('success','Proje güncellendi');
         } else{
            return view('home-page.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sparis(){



        $orderss=DB::select("SELECT *FROM orders WHERE user_id=?", [Auth::user()->id]);

      return view('user-panel.orders-userpanel',compact('orderss'));

     }


     public function new_orders(){

        if(auth()->user()->isAdmin() )
        {

        $newor=DB::select("SELECT s.*,u.name as uyeadsoyad,u.email as emaill FROM orders s, users u WHERE u.id=s.user_id AND status='-'");

      return view('admin-page.orders.new-orders',compact('newor'));
    } else{
        return view('home-page.index');
    }
     }
     public function prepare_orders(){

        if(auth()->user()->isAdmin() )
        {

        $newor=DB::select("SELECT s.*,u.name as uyeadsoyad,u.email as emaill FROM orders s, users u WHERE u.id=s.user_id AND status='Düzenleniyor'");

      return view('admin-page.orders.new-orders',compact('newor'));
    } else{
        return view('home-page.index');
    }
     }


     public function completed_orders(){

        if(auth()->user()->isAdmin() )
        {

        $newor=DB::select("SELECT s.*,u.name as uyeadsoyad,u.email as emaill FROM orders s, users u WHERE u.id=s.user_id AND status='Tamamlandı'");

      return view('admin-page.orders.new-orders',compact('newor'));
    } else{
        return view('home-page.index');
    }
     }
     public function cancelled_orders(){

        if(auth()->user()->isAdmin() )
        {

        $newor=DB::select("SELECT s.*,u.name as uyeadsoyad,u.email as emaill FROM orders s, users u WHERE u.id=s.user_id AND status='İptal edildi'");

      return view('admin-page.orders.new-orders',compact('newor'));
    } else{
        return view('home-page.index');
    }
     }



     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pay($id){
        $orderdetay = \App\Orders::FindOrFail($id);
        return view('home-page.services.pay',compact('orderdetay'));

    }
}
