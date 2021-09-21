<div class="w-100">
    <div id="accordion">
        <div class="row mb-2">
            <div class="col-lg-4 col-sm-12">
                <input wire:model="search" type="text" class="bg-lightgray w-100 border-radius25px border-0 fontsize14px pl-3 pt-2 pb-2 outline-none" placeholder="Search Faq"/>
            </div>
        </div>
        <div class="w-100 d-flex flex-wrap">

            @if($faqs->isEmpty())
                <br>
                <div class="text-gray-700 text-sm">
                    No matching result was found.
                </div>
            @else
                <div class="card text-left border-0 w-100">
                    @foreach ($faqs as $key => $faq)
                        <div class="card-header bg-transparent pl-2 pr-2">
                        <a class="card-link font-gothambook text-dark fontweight500 mb-3 collapsed" data-toggle="collapse" href="#collapse{{$key}}" aria-expanded="false">
                                {{$faq->question}}
                            </a>
                            <div class="float-right col-auto p-0"><a href="#" class="text-black fontsize14px" data-toggle="modal" data-target="#editpost"><i class="fa fa-pencil"></i></a><button href="#" class="text-black fontsize14px bg-transparent border-0 ml-1 delete"><i class="fa fa-trash"></i></button> </div>
                        </div>
                        <div id="collapse{{$key}}" class="collapse" data-parent="#accordion" style="">
                            <div class="card-body font-gothamlight">
                                {{$faq->answer}}
                            </div>
                        </div>
                        
                    @endforeach
                </div>      
            @endif
            {{-- @endif --}}
            
        </div>            
        {{-- <div class="col-12">
            {{$faqs->links()}}
        </div> --}}
    </div>
</div>


