@php
    //dddx(get_defined_vars());
    //dddx($home->lang);
    //dddx(get_class_methods($home->lang));
    //dddx(get_class_methods($_panel));
    //dddx(LaravelLocalization::getSupportedLocales());
@endphp


<li class="nav-item dropdown">
    <a id="docsDropdownMenuLink" href="index.html" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle ">
                {{-- LaravelLocalization::getCurrentLocaleName() --}}
                {{-- $home->lang --}}
                {{-- __('lu::headernav.'.$home->lang) --}} {{-- funziona solo con la pagina home, allora ho utilizzato App::getLocale()  --}}
                {{ __('lu::headernav.'.App::getLocale()) }}
    </a>
    <div aria-labelledby="docsDropdownMenuLink" class="dropdown-menu dropdown-menu-right">
        {{--
        <h6 class="dropdown-header font-weight-normal">Documentation</h6>
            --}}
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

            @if($localeCode!=$lang)
            @php
                $url_lang=LaravelLocalization::getLocalizedURL($localeCode, null, [], true);
                //$url_lang=url($localeCode);
                if(isset($_panel)){
                    $url_lang=$_panel->langUrl($localeCode);
                }
            @endphp
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ $url_lang }}"  class="dropdown-item">
                {{ ucwords($properties['native']) }}
                {{--
                    qui forse ci volevo mettere un mutator invece di usare la funzione ucwords?
                    ma sinceramente anche se fosse non so a che modello metterlo
                --}}
            </a>
            @endif
        @endforeach

    </div>
</li>
