<?php


namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Models\user;
use App\Models\listing;



// the bellow is the converson the common resourses methods and views
class listingController extends Controller
{

    //show all listings
    public function index(){
        return view('listings.index',[
            'listings' => listing::latest('id')->filter(request(['tag','search']))->paginate(6)   // all is an elequene
         ] );
    }

    //    //show sinlge listings

    public function show(listing $listing){
        return view('listings.show', [
            'listing' => $listing  // find is an elequene
        ]);

    }

//    show create forming
public function create(){
    return view('listings.create');
}



// public function store(Request $request) {
//     $formFields = $request->validate([
//         'title'=> 'recquired',
//         'company'=> ['recquired' , Rule::unique('listings','company')],
//         'location'=> 'required',
//         'website'=> 'recquired',
//         'email'=> 'recquired','email',
//         'description'=> 'recquired'




//     ]) ;
//         return redirect('/');





// store new listing

// public function store(Request $request): RedirectResponse
//        {
//         $listing = new listing;

//        $listing->name = $request->name;

//         $listing->save();
//              return redirect('/listings');
//        }



        public function store(Request $request)
{
    $formFields = $request->validate([
        'title' => 'required',
        'tags' => 'required',
        'company' => ['required', Rule::unique('listings', 'company')],
        'location' => 'required',
        'email' => 'required|email',
        'website' => 'required',
        'description' => 'required'

    ]);



    if($request->hasFile('logo')){
        $formFields['logo']=$request->file('logo')->store('logos','public');
    }

    $formFields['user_id'] =auth()->id();
    // Process the validated form data and store it in the database or perform any other necessary actions.
//

   DB::table('listings')->insert($formFields);
//    session::flush('message','listing created successfully');
    return redirect('/')->with('message','listing created successfully');
    // return response()->json([
    //     'message','listing created successfully'
    // ]);
}
// show the update or edit page
public function edit(listing $listing){
    return view('listings.edit' ,['listing' => $listing]);
}

// update listing data

public function update(Request $request , listing $listing)
{

    //to do the action make sure is the logged in user
    if($listing->user_id != auth()->id()){
        abort(403, 'Unauthorized Action');

    }
    $formFields = $request->validate([
        'title' => 'required',
        'tags' => 'required',
        'company' => 'required',
        'location' => 'required',
        'email' => 'required','email',
        'website' => 'required',
        'description' => 'required'

    ]);

    if($request->hasFile('logo')){
        $formFields['logo']=$request->file('logo')->store('logos','public');
    }

    // Process the validated form data and store it in the database or perform any other necessary actions.
//
//    $listing->update($formFields);
//    DB::table('listings')->update($formFields);
DB::table('listings')->where('id', $listing->id)->update($formFields);

//    session::flush('message','listing created successfully');
    return back()->with('message','listing updated successfully');
}

//delete listing  method
public function destroy(  listing $listing){
    //to do the action make sure is the logged in user
    if($listing->user_id != auth()->id()){
        abort(403, 'Unauthorized Action');

    }

    $listing->delete();
    return redirect('/')->with('message','listing delete successfully');


}

    //  show manage listings
    // public function manage(){
    //     return view('listings.manage', ['listings'=>auth()->user()->listings->get()]);
    // }

    public function manage()
{
    $listings = auth()->user()->listings;
    return view('listings.manage', ['listings' => $listings]);
}


}



