
<ul class="accordion-menu">
    <li>
        <a href="/overview" id="overview">
            <div class="dropdownlink">

                <b><i class="far fa-globe"></i> Overview</b>
            
            </div>
        </a>
       
    </li>

    <li onclick="droped()">
        <div class="dropdownlink">
            <b><i class="far fa-eye"></i> Monitoring</b>
            
        </div>
        <ul class="submenuItems">
            <li>
                <a href="/monitoring/hosts"><i class="fas fa-desktop"></i> Hosts</a>
            </li>
            <li>
                <a href="/monitoring/services" ><i class="fas fa-cog"></i> Services</a>
            </li>
            <li>
                <a href="/monitoring/boxs"><i class="fas fa-microchip"></i> Boxs</a>
            </li>
            <li>
                <a href="/monitoring/equipements"><img src="{{asset('images/interface/Equipement.png')}}" alt=""> Equipements</a>
            </li>
            
        </ul>
    </li>
    <li onclick="droped()">
        <div class="dropdownlink"><img src="{{asset('images/interface/Problemes.png')}}" alt="">
            <b style="margin: 0"> Problémes</b>
            
            
        </div>
        <ul class="submenuItems">
            <li>
                <a href="/problems/hosts"><i class="fas fa-desktop"></i> Hosts</a>
            </li>
            <li>
                <a href="/problems/services" ><i class="fas fa-cog"></i> Services</a>
            </li>
            <li>
                <a href="/problems/boxs"><i class="fas fa-microchip"></i> Boxs</a>
            </li>
            <li>
                <a href="/problems/equipements"><img src="{{asset('images/interface/Equipement.png')}}" alt=""> Equipements</a>
            </li>
        </ul>
    </li>

    @if (auth()->user()->hasRole('agent'))

    <li onclick="droped()">
        <div class="dropdownlink">
            <i class="fas fa-tools"></i><b> Configuration</b>
        </div>
        
        <ul class="submenuItems">
            
            <li>
                <a href="/configuration/hosts"><i class="fas fa-desktop"></i> Hosts</a>
            </li>
            <li>
                <a href="/configuration/services"><i class="fas fa-cog"></i> Services</a>
            </li>
            <li>
                <a href="/configuration/boxs"><i class="fas fa-microchip"></i> Boxs</a>
            </li>
            <li>
                <a href="/configuration/equipements"><img src="{{asset('images/interface/Equipement.png')}}" alt=""> Equipements</a>
            </li>
            <li>
                <a href="#"><img src="{{asset('images/interface/pins.png')}}" alt=""> Pins</a>
            </li>
            
            <li>
                <a href="#"><i class="fal fa-sitemap"></i> HostGroups</a>
            </li>
            <li>
                <a href="#">{{--<img src="{{asset('images/interface/servicegroup.png')}}" alt="">--}}
                   <i class="fas fa-cogs"></i> ServiceGroups</a> 
            </li>
            <li>
                <a href="#"><img src="{{asset('images/interface/equipgroup.png')}}" alt=""> EquipGroups</a>
            </li>

            <li>
                <a href="#">{{--<img src="{{asset('images/interface/sites.png')}}" alt=""> --}}
                    <i class="fas fa-building"></i> Sites</a>
            </li>
            <li><a href="#">Lieux</a></li>
            
            <li>
                <a href="/configuration/users"><i class="fas fa-users"></i> Users</a>
            </li>
            <li>
                <a href="#"><img src="{{asset('images/interface/Problemes.png')}}" alt=""> Alarmes</a>
            </li>
            <li>
                <a href="#"><img src="{{asset('images/interface/commands.png')}}" alt=""> Commandes</a>
            </li>
            <li>
                <a href="#"><img src="{{asset('images/interface/notif.png')}}" alt=""> Notifications</a>
            </li>
            
        </ul>
    </li>

    @endif
    
    <li onclick="droped()">
        <div class="dropdownlink"><i class="far fa-chart-bar"></i><b> Statistiques</b>
            
        </div>
        <ul class="submenuItems">
            <li>
                <a href="/statistiques/hosts"><i class="fas fa-desktop"></i> Hosts</a>
            </li>
            <li>
                <a href="/statistiques/services"><i class="fas fa-cog"></i> Services</a>
            </li>
            <li>
                <a href="/statistiques/equipements"><img src="{{asset('images/interface/Equipement.png')}}" alt=""> Equipements</a>
            </li>
        </ul>
    </li>
    <li onclick="droped()">
        <div class="dropdownlink"><i class="far fa-map-marked-alt"></i><b> Cartes</b>
            
        </div>
        <ul class="submenuItems">
            <li>
                <a href="/cartes/automap"><img src="{{asset('images/interface/automap.png')}}" alt=""> AutoMap</a>
            </li>
            <li>
                <a href="#"><img src="{{asset('images/interface/automap.png')}}" alt=""> AutoMap 2</a>
            </li>
            <li>
                <a href="#"><img src="{{asset('images/interface/automap.png')}}" alt=""> AutoMap 3</a>
            </li>
            <li>
                <a href="/cartes/carte"><i class="far fa-map"></i> Cartes</a>
            </li>
        </ul>
    </li>
    <li onclick="droped()">
        <div class="dropdownlink"><i class="far fa-calendar-alt"></i><b> Historiques</b>
            
        </div>
        <ul class="submenuItems">
            <li>
                <a href="/historiques/hosts"><i class="fas fa-desktop"></i> Hosts</a>
            </li>
            <li>
                <a href="/historiques/services"><i class="fas fa-cog"></i> Services</a>
            </li>
            <li>
                <a href="/historiques/boxs"><i class="fas fa-microchip"></i> Boxs</a>
            </li>
            <li>
                <a href="/historiques/equipements"><img src="{{asset('images/interface/Equipement.png')}}" alt=""> Equipements</a>
            </li>
        </ul>
    </li>
</ul>

<div class="toggle-on">
    <button class="tg-btn-on"><i class="fas fa-chevron-left"></i></button>
</div>
