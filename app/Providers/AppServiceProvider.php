<?php

namespace App\Providers;
use View;
use App\Models\Ad;
 
use App\Models\User;
use App\Models\Package;
use App\Models\Purchase;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\LengthAwarePaginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $admin_user= User::where('role_id', 'a')->pluck('id')->first();


        $notifications= DB::table('notifications')->where('read_at', NULL)->where('notifiable_id',$admin_user)->get(); 

        $total_ads_count= Ad::get()->count();
        $featured_ads_count= DB::table('featured_ad')->where('status', 1)->get()->count();

        if($total_ads_count > 0){

           
            $ad_featured_percentage= ($featured_ads_count/$total_ads_count);
            $ad_featured_percentage=$ad_featured_percentage*100;
        }
        else{
            $ad_featured_percentage=0;
        }


        $total_ads_count= Ad::get()->count();
        $active_ads= Ad::where('status', 1)->get()->count();

        if($total_ads_count > 0){
            $live_ads_percentage= $active_ads/$total_ads_count;
            $live_ads_percentage= $live_ads_percentage*100;
        }
        else{
            $live_ads_percentage=0;
        }


        $users_register_count= User::where('role_id', 'cs')->get()->count();

        $this_week=Ad::thisWeekReport()->get()->count();
        $last_week=Ad::lastWeekReport()->get()->count();


        $this_week_users=User::thisWeekReport()->get()->count();
        $last_week_users=User::lastWeekReport()->get()->count();


        $last_sixth_day_package_ids=Purchase::whereDate('created_at', Carbon::now()->subDays(6))->pluck('package_id');
        $last_sixth_day_earnings= Package::whereIn('id', $last_sixth_day_package_ids)->get()->sum('price');


        $last_fith_day_package_ids=Purchase::whereDate('created_at', Carbon::now()->subDays(5))->pluck('package_id');
        $last_fith_day_earnings= Package::whereIn('id', $last_fith_day_package_ids)->get()->sum('price');


        $last_fourth_day_package_ids=Purchase::whereDate('created_at', Carbon::now()->subDays(4))->pluck('package_id');
        $last_fourth_day_earnings= Package::whereIn('id', $last_fourth_day_package_ids)->get()->sum('price');


        $last_third_day_package_ids=Purchase::whereDate('created_at', Carbon::now()->subDays(3))->pluck('package_id');
        $last_third_day_earnings= Package::whereIn('id', $last_third_day_package_ids)->get()->sum('price');


        $last_second_day_package_ids=Purchase::whereDate('created_at', Carbon::now()->subDays(2))->pluck('package_id');
        $last_second_day_earnings= Package::whereIn('id', $last_second_day_package_ids)->get()->sum('price');


        $last_day_package_ids=Purchase::whereDate('created_at', Carbon::now()->subDays(1))->pluck('package_id');
        $last_day_earnings= Package::whereIn('id', $last_day_package_ids)->get()->sum('price');

        $past_six_days_earnings= $last_day_earnings+ $last_second_day_earnings+ $last_third_day_earnings+$last_fourth_day_earnings+$last_sixth_day_earnings+$last_fith_day_earnings;


        $days_earnings=[
            
             $last_day_earnings,
             $last_second_day_earnings, 
             $last_third_day_earnings,
             $last_fourth_day_earnings,
             $last_sixth_day_earnings,
             $last_fith_day_earnings
            ];

            $days_earnings=implode(',', $days_earnings);

         
         
        // dd($last_day_earnings, $last_second_day_earnings, $last_third_day_earnings,$last_fourth_day_earnings,$last_sixth_day_earnings,$last_fith_day_earnings);

  

        View::share('ad_featured_percentage', $ad_featured_percentage);
        View::share('total_ads_count' , $total_ads_count);
        View::share('featured_ads_count',$featured_ads_count);
        View::share('live_ads_percentage',$live_ads_percentage);
        View::share('users_register_count',$users_register_count);
        View::share('this_week',$this_week);
        View::share('last_week',$last_week);

        View::share('this_week_users',$this_week_users);
        View::share('last_week_users',$last_week_users);

        View::share('days_earnings',$days_earnings);

        View::share('past_six_days_earnings',$past_six_days_earnings);

 
         View::share('notifications',$notifications);

      
       



 
        $active_dashboard= 'active';
        View::share('active_dashboard',$active_dashboard);
       

        Collection::macro('paginate', function($perPage, $total = null, $page = null, $pageName = 'page') {
            $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);
    
            return new LengthAwarePaginator(
                $this->forPage($page, $perPage),
                $total ?: $this->count(),
                $perPage,
                $page,
                [
                    'path' => LengthAwarePaginator::resolveCurrentPath(),
                    'pageName' => $pageName,
                ]
            );
        });
    }
}
