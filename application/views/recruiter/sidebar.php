<aside id="menu">
    <div class="accordion" id="side_menu">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#side_menu" href="#m_dashboard">
                    <i class="elusive-icon-dashboard"></i>
                    Dashboard
                </a>
            </div>
            <div id="m_dashboard" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul>
                        <li class=""><a href="<?=site_url('admin')?>">Default Dashboard</a></li>
                        <li><a href="dashboard_alternative.html">Alternative Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#side_menu" href="#client">
                    <i class="elusive-icon-user"></i>
                    Recruiter Manager
                </a>
            </div>
            <div id="client" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul>
                        <li class=""><a href="<?=site_url('recruiter/editprofile')?>">Edit Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#side_menu" href="#candidate">
                    <i class="elusive-icon-myspace"></i>
                    Candidate
                </a>
            </div>
            <div id="candidate" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul>
                        <li class=""><a href="<?=site_url('recruiter/newcandidate')?>">Add New Candidate</a></li>
                        <li><a href="<?=site_url('recruiter/candidate_table')?>">Candidate List</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#side_menu" href="#team">
                    <i class="elusive-icon-group"></i>
                    Today Interview Schedule
                </a>
            </div>
            <div id="team" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul>
                        <li class=""><a href="<?=site_url('recruiter/interviewschedulelist')?>">Interview Schedule List</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#side_menu" href="#position">
                    <i class="elusive-icon-group"></i>
                    Position
                </a>
            </div>
            <div id="position" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul>
                        <li class=""><a href="<?=site_url('recruiter/position')?>">Position List</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>