@php
$pages=Theme::xotModelEager('page')
->where('parent_id',0)
->where('status',1)
->get();
$our_pages = ['Cookie Policy', 'Privacy Policy'];
@endphp
<div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
    <h6 class="text-uppercase text-dark mb-3">
        {{-- Pages --}}
        @lang('food::home.pages')
    </h6>
    <ul class="list-unstyled">
        @foreach($pages as $page)

        @if(!$page->is_modal)
        {{--  
                @if(!in_array($page->title, $our_pages))
                --}}
        <li>
            <a href="{{ $page->url }}" class="text-muted">
                {{ $page->title }}
                {{--  
                            <span class="badge badge-info-light ml-1">New</span>
                        --}}
            </a>
        </li>
        @else
        @php
        $page_panel = Panel::get($page);
        //dddx($page_panel->showUrl());
        @endphp
        <li>
            {{-- 
                        <a class="text-muted" 
                        data-toggle="modal" 
                        href="{{ $page_panel->showUrl() }}"
            data-title="Cookie Policy"
            data-target="#myModalIframe">
            Cookie Policy
            </a>
            --}}
            <button type="button" data-title="{{ $page->title }} di {{ Theme::metatag('title') }}"
                data-href="{{ $page_panel->showUrl() }}" data-toggle="modal" class="text-muted"
                data-target="#myModalIframe">
                {{ $page->title }}
            </button>
        </li>
        @endif


        @endforeach
        {{--  
            <li><a href="team.html" class="text-muted">Team  <span class="badge badge-info-light ml-1">New</span>                                   </a></li>
            <li><a href="contact.html" class="text-muted">Contact                                   </a></li>
            <li><a href="pricing.html" class="text-muted">Pricing                                   </a></li>
            <li><a href="text.html" class="text-muted">Text page                                   </a></li>
            <li><a href="faq.html" class="text-muted">F.A.Q.s                                   </a></li>
            <li><a href="coming-soon.html" class="text-muted">Coming soon                                   </a></li>
            --}}
    </ul>
</div>