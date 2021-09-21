<div>
    <div id="accordion">
        <div class="row">
            <div class="col-lg-4 col-sm-12">
                <input wire:model="search" type="text" placeholder="Search Faq"/>
            </div>
        </div>
        <div class="w-100 d-flex flex-wrap overflow-y pl-sm-2 pr-sm-2">

            @if($faqs->isEmpty())
                <br>
                <div class="text-gray-700 text-sm">
                    No matching result was found.
                </div>
            @else
                <div class="card text-left border-0">
                    @foreach ($faqs as $faq)
                        <div class="card-header bg-transparent">
                        <a class="card-link font-gothambook text-dark fontweight500 mb-3 collapsed" data-toggle="collapse" href="#collapse1" aria-expanded="false">
                                {{$faq->question}}
                            </a>
                            <div class="float-right col-auto p-0">
                                <a href="#" class="text-black fontsize14px"><i class="fa fa-pencil"></i></a>
                                <button href="#" class="text-black fontsize14px bg-transparent border-0 ml-1">
                                    <i class="fa fa-trash"></i>
                                </button> 
                            </div>
                        </div>
                        <div id="collapse1" class="collapse" data-parent="#accordion" style="">
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
