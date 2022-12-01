<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\EventCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $events=Event::paginate(10);
     
       return view('admin.events.index')->with('events',$events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventcategory=EventCategory::all();
        
        return view('admin.events.create')->with('eventcategory',$eventcategory);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'eventcat_id'=>'required',
            'description'=>'required',
            'image' => 'required',
            'event_date' => 'required',
            'event_time' => 'required'

        ]);
        $event=new Event();
        if($request->hasFile('image')){
            $image= $request->image;
            $image_new_name= $image->getClientOriginalName();
            $image->move('images/events', $image_new_name);
            $event->image= $image_new_name;
        }
        $event->name=$request->name;
        $event->slug=Str::slug($request->name);
        $event->eventcat_id=$request->eventcat_id;
        $event->location=$request->location;
        $event->event_date=$request->event_date;
        $event->event_time=$request->event_time;
        $event->description=$request->description;
        $event->save();
        toastr()->success("Event created successfully");
         return \redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event=Event::find($id);
        $eventcategory=EventCategory::all();
       
        return view('admin.events.edit')->with(['event'=>$event,'eventcategory'=>$eventcategory]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'eventcat_id'=>'required',
            'description'=>'required',
            'image' => 'required',
            'event_date' => 'required',
            'event_time' => 'required'
        ]);
        $event=Event::find($id);
        if($request->hasFile('image')){
           $image=$request->image;
           $image_new_name=$image->getClientOriginalName();
           $image->move('images/events',$image_new_name);
           $event->image=$image_new_name;
        }
        $event->name=$request->name;
        $event->slug=Str::slug($request->name);
        $event->eventcat_id=$request->eventcat_id;
        $event->location=$request->location;
        $event->event_date=$request->event_date;
        $event->event_time=$request->event_time;
        $event->description=$request->description;
        $event->save();
        toastr()->success("Event Update successfully");
        return \redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         
      
        $event=Event::find($id);
     
        if($event!=null){
            $event->status=0;
            $event->save();
            $event->delete();
            toastr()->success("Event deleted successfully");
            return \redirect()->route('event.index');
        }
    }



    public function trashed()
    {
        $events =Event::onlyTrashed()->paginate(10);
        return view('admin.events.trashed')->with('events',$events);
    }


    public function forceDelete($id){
        $event=Event::onlyTrashed()->where('id', $id)->first();
        if($event!=null){
            $event->forceDelete();
            toastr()->success("Event deleted successfully");
            return \redirect()->route('event.index');
        }
        else{
            toastr()->error("Event not found");
            return \redirect()->route('event.index');
        }
    }


    public function restore($id){

  
        $event=Event::onlyTrashed()->where('id', $id)->first();
        if($event!=null){
           
            $event->restore();
            toastr()->success("Event Restore successfully");
            return \redirect()->route('event.index');
        }
        else{
            toastr()->error("Event not found");
            return \redirect()->route('event.index');
        }
    }


    public function statusChange($id){
        $event=Event::find($id);
        if($event->status=='1'){
            $event->status='0';
            $event->save();
            toastr()->success("event is deactivated successfully");
            return back();
        }else{
            $event->status='1';
            $event->save();
            toastr()->success("event is activated  successfully");
            return back();
        }
    }

}
