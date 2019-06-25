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


    </div>
    <div class="clear-fix"></div>
    <div class="privacyInfo">
            <div>
                    <h4><i class="fas fa-user-shield"></i>
                      <a href="/ispi/public/changePrivacy">Edit Privacy Info</a> </h4>
                    <div class="clear-fix"></div>


            </div>
    </div>
</aside>
