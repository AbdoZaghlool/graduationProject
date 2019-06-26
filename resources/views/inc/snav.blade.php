
<aside class="menu-wrap">
    <div class="profileInfo">
        <a><img src="storage/uploads/{{Auth::user()->photo}}"></a>
        <h4><a href="/ispi/public/dashboard">{{Auth::user()->name}}</a></h4>
    </div>
    <div class="editProfile">
            <h4><i class="fas fa-user-edit"></i> <a href="">edit personal Info</a></h4>
                <div class="clear-fix"></div>
            <h5><a href="/ispi/public/changePhoto">change photo</a></h5>
            <h5><a href="/ispi/public/changeInfo">edit basic info</a></h5>
            <h5><a href="/ispi/public/changePrivacy">Account</a></h5>

    </div>
    <div class="clear-fix"></div>

    <div class="sid-nav-socialItems" style="margin-top: 3.2rem;font-size: .9rem;margin-bottom: 4rem;">
        <h4 style="font-size: .9rem;float:left;width:100%"><i class="fas fa-envelope"></i> Contact Us</h4>
        <i class="fab fa-facebook-square" style="font-size:1.2rem"></i>
        <i class="fab fa-linkedin" style="font-size:1.2rem"></i>
        <i class="fab fa-github" style="font-size:1.2rem"></i>
        <i class="fab fa-google" style="font-size:1.2rem"></i>
    </div>
    <div class="privacyInfo">
        <hr>
        <div>  <h5><a><i class="fas fa-question"></i> HELP</a></h5>
                <h5><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Log Out</a></h5>
        </div>
</div>
</aside>


