<section class="main">
    <div class="tab">
        <button class="tablinks" onmouseover="openTab(event, 'London')" onmouseout="closeTab(event, 'London')">London</button>
        <button class="tablinks" onmouseover="openTab(event, 'Paris')" onmouseout="closeTab(event, 'Paris')">Paris</button>
        <button class="tablinks" onmouseover="openTab(event, 'Tokyo')" onmouseout="closeTab(event, 'Tokyo')">Tokyo</button>
    </div>

    <div id="London" class="tabcontent">
        <h3>London</h3>
        <p>London is the capital city of England.</p>
    </div>

    <div id="Paris" class="tabcontent">
        <h3>Paris</h3>
        <p>Paris is the capital of France.</p>
    </div>

    <div id="Tokyo" class="tabcontent">
        <h3>Tokyo</h3>
        <p>Tokyo is the capital of Japan.</p>
    </div>
    <script>
        function openTab(evt, cityName) {
            closeAllTabs();

            // Show the current tab, and add an "active" class to the link that opened the tab
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        function closeAllTabs() {
            let i;
            // Get all elements with class="tabcontent" and hide them
            let tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            // Get all elements with class="tablinks" and remove the class "active"
            let tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
        }
    </script>
</section>