<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use App\Models\Purchase;
use App\Mail\PackageExpired;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class CheckExpiry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:expiry';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is for the purchase expiry';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

       $purchases=Purchase::where('expiry_date',"<=",Carbon::now()->format('Y-m-d h:i:s'))->get();
     
        foreach($purchases as $purchase){
           
            $purchase->featuredAds()->updateExistingPivot($purchase->id,[
                'status'=>"0",   
            ]);
            $purchase->status='0';
            if($purchase->save()){
             
            Mail::to($purchase->user->email)->send(new PackageExpired([
                "email" => "no-reply@autotradia.com",
                "subject" => "Sorry! Your Purchased has been expired on Auto Tradia!",
                "package_name" => $purchase->package->name,
                "package_price" => $purchase->package->price,
                "user_name" => $purchase->user->name,
                "expiry_date" => $purchase->expiry_date,
                'purchase_date' => $purchase->created_at,
            ]));  
            }
        }
      
         \Log::info("Cron is working fine!");
     
        /*
           Write your database logic we bellow:
           Item::create(['name'=>'hello new']);
        */
      
        $this->info('Demo:Cron Cummand Run successfully!');
    }
}
