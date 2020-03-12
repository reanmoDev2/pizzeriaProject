<nav class="navbar navbar-expand-md bg-primary fixed-left">
  <div class="nav-brand d-flex align-item-right">
    <img src="<?php echo URLROOT; ?>/img/logo.png" alt="" id="logoSidebar">

    <div class="text-white pl-3 mt-1">
      <span class="brand-name">Mamma's</span>
      <span class="brand-subtitle font-weight-lighter d-flex align-self-bottom">SIMPLE FOOD</span>
    </div>
  </div>

  <div id="navbarContent">
    <ul class="nav navbar-nav">
      <li class="nav-item">
        <a href="<?php echo URLROOT; ?>/pages/dashboard" class="nav-link <?php if ($data['activeSide'] == 'dashboard') echo ('active'); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
            <g id="Gruppe_55" data-name="Gruppe 55" transform="translate(-38 -132)">
              <rect class="icon-color-fill" id="Rechteck_6" data-name="Rechteck 6" width="10" height="8" rx="1" transform="translate(38 146)" fill="#fff" />
              <rect class="icon-color-fill" id="Rechteck_9" data-name="Rechteck 9" width="10" height="8" rx="1" transform="translate(50 132)" fill="#fff" />
              <rect class="icon-color-fill" id="Rechteck_7" data-name="Rechteck 7" width="10" height="12" rx="1" transform="translate(38 132)" fill="#fff" />
              <rect class="icon-color-fill" id="Rechteck_8" data-name="Rechteck 8" width="10" height="12" rx="1" transform="translate(50 142)" fill="#fff" />
            </g>
          </svg>
          Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo URLROOT; ?>/menus/index" class="nav-link <?php if ($data['activeSide'] == 'menu') echo ('active'); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24.144" viewBox="0 0 22 24.144">
            <g id="Gruppe_1" data-name="Gruppe 1" transform="translate(-38 -154.856)">
              <g class="icon-color-stroke" id="Rechteck_11" data-name="Rechteck 11" transform="translate(38 157)" fill="none" stroke="#bfbfbf" stroke-width="1.5">
                <rect width="22" height="22" rx="1" stroke="none" />
                <rect x="0.75" y="0.75" width="20.5" height="20.5" rx="0.25" fill="none" />
              </g>
              <path class="icon-color-fill icon-color-stroke" id="Pfad_7" data-name="Pfad 7" d="M39.807,186.356h5.066v10.79l-3-3.664-3,3.664v-10.79Z" transform="translate(3 -31)" fill="#bfbfbf" stroke="#bfbfbf" stroke-linejoin="round" stroke-width="1" />
              <line class="icon-color-stroke" id="Linie_3" data-name="Linie 3" x2="6" transform="translate(50.5 161.5)" fill="none" stroke="#bfbfbf" stroke-linecap="round" stroke-width="1.5" />
              <line class="icon-color-stroke" id="Linie_4" data-name="Linie 4" x2="6" transform="translate(50.5 165.5)" fill="none" stroke="#bfbfbf" stroke-linecap="round" stroke-width="1.5" />
              <line class="icon-color-stroke" id="Linie_5" data-name="Linie 5" x2="14" transform="translate(42.5 169.5)" fill="none" stroke="#bfbfbf" stroke-linecap="round" stroke-width="1.5" />
              <line class="icon-color-stroke" id="Linie_6" data-name="Linie 6" x2="11" transform="translate(42.5 173.5)" fill="none" stroke="#bfbfbf" stroke-linecap="round" stroke-width="1.5" />
            </g>
          </svg>
          Speisekarte
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo URLROOT; ?>/pages/orders" class="nav-link <?php if ($data['activeSide'] == 'orders') echo ('active'); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="31.302" height="24.038" viewBox="0 0 31.302 24.038">
            <path class="icon-color-fill" id="shopping-basket-add_1_" data-name="shopping-basket-add (1)" d="M19.478,22.1v-.091H13.75V22.1c0,.013,0,.029,0,.045a1.9,1.9,0,1,1-3.8,0c0-.016,0-.031,0-.047v-.089H9.3a1.22,1.22,0,0,1-1.192-.96V21.04L4.287,2.967,1.026,2.424A1.221,1.221,0,0,1,1.273.007a1.172,1.172,0,0,1,.157.01H1.424L5.505.7a1.222,1.222,0,0,1,.991.943v.008l.692,3.264,11.9.992a6.51,6.51,0,0,0-.112,1.186h0v0a6.74,6.74,0,0,0,.1,1.179l-.006-.04a1.4,1.4,0,0,0-.977,1.33,1.423,1.423,0,0,0,.026.271V9.824l.719,5.19a1.452,1.452,0,0,0,.418.845,1.127,1.127,0,0,0,.786.33h0a1.083,1.083,0,0,0,.2-.019h-.007a1.389,1.389,0,0,0,1.038-1.341,1.432,1.432,0,0,0-.025-.264v.009l-.392-2.822A6.657,6.657,0,0,0,25.673,13.8a.907.907,0,0,0,.128-.006l.093-.005-.669,3.9a.407.407,0,0,1-.4.339H9.96l.327,1.547H24.444a1.221,1.221,0,0,1,0,2.44H23.28v.091a1.9,1.9,0,0,1-3.8,0Zm1.358,0a.539.539,0,0,0,1.078,0,.562.562,0,0,0-.008-.092v0h-1.06a.514.514,0,0,0-.008.091Zm-9.528,0a.539.539,0,0,0,1.078,0,.562.562,0,0,0-.008-.092v0H11.317a.494.494,0,0,0-.007.089v0ZM15.175,8.224a1.388,1.388,0,0,0-1.038,1.34,1.443,1.443,0,0,0,.025.265V9.82l.719,5.19a1.452,1.452,0,0,0,.418.845,1.127,1.127,0,0,0,.786.33h0a1.083,1.083,0,0,0,.2-.019h-.007a1.389,1.389,0,0,0,1.038-1.341,1.432,1.432,0,0,0-.025-.264v.009l-.719-5.19a1.452,1.452,0,0,0-.418-.845,1.132,1.132,0,0,0-.786-.331h0a1.022,1.022,0,0,0-.2.02h.007Zm-3.966,0A1.386,1.386,0,0,0,10.2,9.833V9.824l.719,5.19a1.452,1.452,0,0,0,.418.845,1.127,1.127,0,0,0,.786.33h0a1.083,1.083,0,0,0,.2-.019H12.31a1.388,1.388,0,0,0,1.039-1.341,1.441,1.441,0,0,0-.025-.264v.009l-.72-5.193a1.452,1.452,0,0,0-.418-.845,1.128,1.128,0,0,0-.786-.331h0a1.072,1.072,0,0,0-.2.019ZM20,7.1a5.678,5.678,0,1,1,5.678,5.678A5.678,5.678,0,0,1,20,7.1Zm1.627,0a4.051,4.051,0,1,0,4.051-4.052A4.051,4.051,0,0,0,21.625,7.1Zm3.24,1.621V7.909h-.808a.814.814,0,0,1,0-1.628h.808V5.473a.814.814,0,1,1,1.628,0v.808H27.3a.814.814,0,0,1,0,1.628h-.808v.807a.814.814,0,1,1-1.628,0Z" transform="translate(-0.052 -0.007)" fill="#bfbfbf" />
          </svg>
          Bestellungen
        </a>
      </li>
      <li class="nav-item">
        <a href="<?php echo URLROOT; ?>/pages/settings" class="nav-link <?php if ($data['activeSide'] == 'settings') echo ('active'); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" width="23.998" height="20.999" viewBox="0 0 23.998 20.999">
            <g id="player-settings" transform="translate(0 6)">
              <path class="icon-color-fill" id="player-settings-2" data-name="player-settings" d="M13.45,6.34a.825.825,0,0,1-.606-.507l0-.006L12.462,4.9a.816.816,0,0,1,.064-.793l0,0,.617-.824a.6.6,0,0,0-.031-.727h0l-.676-.678a.6.6,0,0,0-.729-.027h0l-.822.617a.811.811,0,0,1-.795.061l.005,0-.926-.381a.817.817,0,0,1-.512-.6v0L8.514.529A.636.636,0,0,0,7.988.015h0S7.822,0,7.5,0s-.481.016-.481.016a.636.636,0,0,0-.533.509v0L6.339,1.546a.822.822,0,0,1-.507.6l-.006,0L4.9,2.534a.8.8,0,0,1-.339.074.811.811,0,0,1-.454-.139l0,0-.824-.617a.6.6,0,0,0-.728.029h0l-.674.679a.6.6,0,0,0-.027.728v0l.617.824a.8.8,0,0,1,.137.452.818.818,0,0,1-.076.343l0,0-.382.926a.821.821,0,0,1-.6.512h0L.53,6.483a.635.635,0,0,0-.511.531v0A4.793,4.793,0,0,0,0,7.5c0,.321.017.481.017.481a.635.635,0,0,0,.509.532h0l1.018.145a.823.823,0,0,1,.606.507l0,.006.382.926a.812.812,0,0,1-.066.793l0,0-.617.824a.557.557,0,0,0-.081.624v0c.109.136.423.47.424.471l.234.215c.127.117.651.281.857.127l.823-.617a.813.813,0,0,1,.795-.061l0,0,.926.381a.817.817,0,0,1,.512.6v0l.143,1.016a.637.637,0,0,0,.529.514h0S7.178,15,7.5,15s.481-.017.481-.017a.636.636,0,0,0,.529-.51v0l.146-1.018a.818.818,0,0,1,.507-.6l.006,0,.926-.382a.812.812,0,0,1,.793.066l0,0,.824.617a.6.6,0,0,0,.729-.031h0l.676-.677a.605.605,0,0,0,.028-.729v0l-.617-.824a.817.817,0,0,1-.061-.795l0,0,.381-.926a.823.823,0,0,1,.6-.512h.005l1.017-.145a.636.636,0,0,0,.514-.529v0S15,7.821,15,7.5s-.017-.481-.017-.481a.636.636,0,0,0-.511-.532h0ZM7.5,9.374A1.876,1.876,0,1,1,9.374,7.5h0A1.875,1.875,0,0,1,7.5,9.374Z" transform="translate(-0.001 0.001)" fill="#bfbfbf" />
            </g>
            <g id="player-settings-3" data-name="player-settings" transform="translate(13)">
              <path class="icon-color-fill" id="player-settings-4" data-name="player-settings" d="M9.863,4.649a.6.6,0,0,1-.445-.372v0l-.279-.679a.6.6,0,0,1,.047-.582v0l.453-.6a.442.442,0,0,0-.022-.533h0l-.5-.5a.444.444,0,0,0-.535-.02h0l-.6.453a.595.595,0,0,1-.583.045h0L6.724,1.58a.6.6,0,0,1-.375-.441v0l-.1-.748A.466.466,0,0,0,5.858.011h0S5.736,0,5.5,0s-.352.012-.352.012a.466.466,0,0,0-.391.374v0l-.107.747a.6.6,0,0,1-.372.444h0l-.679.279a.584.584,0,0,1-.248.054.6.6,0,0,1-.333-.1h0l-.6-.453a.441.441,0,0,0-.534.021h0l-.494.5a.441.441,0,0,0-.02.534h0l.453.6a.59.59,0,0,1,.1.331A.6.6,0,0,1,1.86,3.6v0l-.28.679a.6.6,0,0,1-.441.375h0l-.747.105a.466.466,0,0,0-.374.389v0A3.515,3.515,0,0,0,0,5.5c0,.235.012.353.012.353a.466.466,0,0,0,.373.39h0l.747.106a.6.6,0,0,1,.445.372v0l.28.679a.6.6,0,0,1-.048.582v0l-.453.6a.409.409,0,0,0-.06.458v0c.08.1.31.345.311.346l.172.158c.093.086.478.206.629.093l.6-.453A.6.6,0,0,1,3.6,9.141h0l.679.279a.6.6,0,0,1,.375.441v0l.1.745a.467.467,0,0,0,.388.377h0S5.264,11,5.5,11s.353-.012.353-.012a.466.466,0,0,0,.388-.374v0l.107-.747a.6.6,0,0,1,.372-.444h0l.679-.28a.6.6,0,0,1,.582.048h0l.6.453a.443.443,0,0,0,.534-.022h0l.5-.5a.444.444,0,0,0,.021-.535h0l-.453-.6A.6.6,0,0,1,9.14,7.4v0l.279-.679a.6.6,0,0,1,.442-.375h0l.746-.106a.466.466,0,0,0,.377-.388v0S11,5.735,11,5.5s-.012-.353-.012-.353a.467.467,0,0,0-.375-.39h0ZM5.5,6.874A1.375,1.375,0,1,1,6.874,5.5h0A1.375,1.375,0,0,1,5.5,6.874Z" transform="translate(-0.001 0.001)" fill="#bfbfbf" />
            </g>
          </svg>
          Einstellungen
        </a>
      </li>

    </ul>
  </div>
</nav>