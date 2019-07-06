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
                    Client Manager
                </a>
            </div>
            <div id="client" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul>
                        <li class=""><a href="<?=site_url('admin/client')?>">Add New Client</a></li>
                        <li><a href="<?=site_url('admin/client_list')?>">Client List</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#side_menu" href="#position">
                    <i class="elusive-icon-myspace"></i>
                    Position manager
                </a>
            </div>
            <div id="position" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul>
                        <li class=""><a href="<?=site_url('admin/position')?>">Add New Position</a></li>
                        <li><a href="<?=site_url('admin/position_list')?>">Position List</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#side_menu" href="#team">
                    <i class="elusive-icon-group"></i>
                    Team Manager
                </a>
            </div>
            <div id="team" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul>
                        <li class=""><a href="<?=site_url('admin/recruiter')?>">Add New Recruiter</a></li>
                        <li><a href="<?=site_url('admin/recruiter_list')?>"">Recruiter List</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#side_menu" href="#interview">
                    <i class="elusive-icon-group"></i>
                    Today Interview Schedule
                </a>
            </div>
            <div id="interview" class="accordion-body collapse">
                <div class="accordion-inner">
                    <ul>
                        <li><a href="<?=site_url('admin/interview_schedule')?>"">Interview Schedule List</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>