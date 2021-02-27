<!-- Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">

    <!-- Links -->
    <ul class="nav navbar-nav" style="margin-right: auto">
        <a class="navbar-brand" href="/">
            {{-- Use Google Photos --}}
            <img
                src="https://lh3.googleusercontent.com/XevSN7Vfmj2ahFecBYgUY5Ay6LSYrMk5NE12m_uApeQOptpg4ZzWN0nAOcKiesixSaH4QQLnA8WOMfEGBoawkrdUWOQbnFe9G4bSsfqPWtePz1GSnrsDNmegth8R7DykIweVlxGjwfiLuaADpO0uIXG7njXgUZirghQ3aN5mE3JO_9NZkZ2dxPg4-9U5I0qyifNxCx7lJcKeCdory243jtuiSkjKTlJW5ffz4AHw9Gy8ULaevghz97FmZpimLqGoF-45poqhQMgWalJkG3Ex7_osDcAUR4wVzRJnhyL9YYnAw3BRhdXmWIjycRQiODzcdsxxiz0kyLTJoCab6UfsETuimjiJX55J6z112OXeZYkycuRU9q2oyy6jWOM21dt7IqD_kgTna2vekY5hCtCFA0TEEUYIg74y0r-Z88zlzh9qPIN3usutTz0oxrXulv1DZWu2UtMoBA7Vox20I3x422B6UhxvwhDUkMcSwb3zFcrP6ld6XMO_cTfcAtrHP9Dl9KOFLNYOFmCRdJzNkJjjOxdMY83wS_8TBTtsZs1q8uXx0KvjCSirp2_oNhnzaLmyghUEBocdiwKM2chY91vGnSaXgbE1dYRHnj10zFZQI8zawPjA7YqRPmOhvRDSd_LG7O8wR2LGmWkX9c9bA0pnE854aeuWUhtuuyn4cFhIvrsNrus4ILYz6F9Bl_pYtg=w596-h512-no?authuser=0"
                width="75" height="75" class="rounded float-left" style="margin-left: 10px" alt="">
            The RJ Show
        </a>
        <li class="nav-item" style="padding-top: 20px">
            <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item" style="padding-top: 20px">
            <a class="nav-link" href="videos">Videos</a>
        </li>
        <li class="nav-item" style="padding-top: 20px">
            <a class="nav-link" href="blog">Blog</a>
        </li>
    </ul>
    <?php
    if (!isset($_SESSION['id'])) {
        echo "<a class='nav-item nav-link' style='margin-left: auto' href='login'><i class='fas fa-sign-in-alt'><span class='nav-text'>&nbsp; Login</span></i></a>";
    } else {
        echo "<a class='nav-item nav-link' style='margin-left: auto' href='logout'><i class='fas fa-sign-out-alt'><span class='nav-text'>&nbsp; Logout</span></i></a>";
    }
    ?>

</nav>
