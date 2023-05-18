<?php

namespace DMO\SavingsBond\Controllers\Models;

use DMO\SavingsBond\Models\Offer;

use DMO\SavingsBond\Events\OfferCreated;
use DMO\SavingsBond\Events\OfferUpdated;
use DMO\SavingsBond\Events\OfferDeleted;

use DMO\SavingsBond\Requests\CreateOfferRequest;
use DMO\SavingsBond\Requests\UpdateOfferRequest;

use DMO\SavingsBond\DataTables\OfferDataTable;

use Hasob\FoundationCore\Controllers\BaseController;
use Hasob\FoundationCore\Models\Organization;

use Flash;

use Illuminate\Http\Request;
use Illuminate\Http\Response;


class OfferController extends BaseController
{
    /**
     * Display a listing of the Offer.
     *
     * @param OfferDataTable $offerDataTable
     * @return Response
     */
    public function index(Organization $org, OfferDataTable $offerDataTable)
    {
        $current_user = Auth()->user();

        $cdv_offers = new \Hasob\FoundationCore\View\Components\CardDataView(Offer::class, "dmo-savings-bond-module::pages.offers.card_view_item");
        $cdv_offers->setDataQuery(['organization_id'=>$org->id])
                        //->addDataGroup('label','field','value')
                        //->setSearchFields(['field_to_search1','field_to_search2'])
                        //->addDataOrder('display_ordinal','DESC')
                        //->addDataOrder('id','DESC')
                        ->enableSearch(true)
                        ->enablePagination(true)
                        ->setPaginationLimit(20)
                        ->setSearchPlaceholder('Search Offer');

        if (request()->expectsJson()){
            return $cdv_offers->render();
        }

        return view('dmo-savings-bond-module::pages.offers.card_view_index')
                    ->with('current_user', $current_user)
                    ->with('months_list', BaseController::monthsList())
                    ->with('states_list', BaseController::statesList())
                    ->with('cdv_offers', $cdv_offers);

        /*
        return $offerDataTable->render('dmo-savings-bond-module::pages.offers.index',[
            'current_user'=>$current_user,
            'months_list'=>BaseController::monthsList(),
            'states_list'=>BaseController::statesList()
        ]);
        */
    }

    /**
     * Show the form for creating a new Offer.
     *
     * @return Response
     */
    public function create(Organization $org)
    {
        return view('dmo-savings-bond-module::pages.offers.create');
    }

    /**
     * Store a newly created Offer in storage.
     *
     * @param CreateOfferRequest $request
     *
     * @return Response
     */
    public function store(Organization $org, CreateOfferRequest $request)
    {
        $input = $request->all();

        /** @var Offer $offer */
        $offer = Offer::create($input);

        //Flash::success('Offer saved successfully.');

        OfferCreated::dispatch($offer);
        return redirect(route('sb.offers.index'));
    }

    /**
     * Display the specified Offer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show(Organization $org, $id)
    {
        /** @var Offer $offer */
        $offer = Offer::find($id);

        if (empty($offer)) {
            //Flash::error('Offer not found');

            return redirect(route('sb.offers.index'));
        }

        return view('dmo-savings-bond-module::pages.offers.show')->with('offer', $offer);
    }

    /**
     * Show the form for editing the specified Offer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit(Organization $org, $id)
    {
        /** @var Offer $offer */
        $offer = Offer::find($id);

        if (empty($offer)) {
            //Flash::error('Offer not found');

            return redirect(route('sb.offers.index'));
        }

        return view('dmo-savings-bond-module::pages.offers.edit')->with('offer', $offer);
    }

    /**
     * Update the specified Offer in storage.
     *
     * @param  int              $id
     * @param UpdateOfferRequest $request
     *
     * @return Response
     */
    public function update(Organization $org, $id, UpdateOfferRequest $request)
    {
        /** @var Offer $offer */
        $offer = Offer::find($id);

        if (empty($offer)) {
            //Flash::error('Offer not found');

            return redirect(route('sb.offers.index'));
        }

        $offer->fill($request->all());
        $offer->save();

        //Flash::success('Offer updated successfully.');
        
        OfferUpdated::dispatch($offer);
        return redirect(route('sb.offers.index'));
    }

    /**
     * Remove the specified Offer from storage.
     *
     * @param  int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy(Organization $org, $id)
    {
        /** @var Offer $offer */
        $offer = Offer::find($id);

        if (empty($offer)) {
            //Flash::error('Offer not found');

            return redirect(route('sb.offers.index'));
        }

        $offer->delete();

        //Flash::success('Offer deleted successfully.');
        OfferDeleted::dispatch($offer);
        return redirect(route('sb.offers.index'));
    }

        
    public function processBulkUpload(Organization $org, Request $request){

        $attachedFileName = time() . '.' . $request->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads'), $attachedFileName);
        $path_to_file = public_path('uploads').'/'.$attachedFileName;

        //Process each line
        $loop = 1;
        $errors = [];
        $lines = file($path_to_file);

        if (count($lines) > 1) {
            foreach ($lines as $line) {
                
                if ($loop > 1) {
                    $data = explode(',', $line);
                    // if (count($invalids) > 0) {
                    //     array_push($errors, $invalids);
                    //     continue;
                    // }else{
                    //     //Check if line is valid
                    //     if (!$valid) {
                    //         $errors[] = $msg;
                    //     }
                    // }
                }
                $loop++;
            }
        }else{
            $errors[] = 'The uploaded csv file is empty';
        }
        
        if (count($errors) > 0) {
            return $this->sendError($this->array_flatten($errors), 'Errors processing file');
        }
        return $this->sendResponse($subject->toArray(), 'Bulk upload completed successfully');
    }
}
