@can('backend.settings.users.index')
    <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $patients ?? 0 }}</h3>

                <p>Patients</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-nurse"></i>
            </div>
            <a href="{{ route('backend.settings.users.index') }}"
               class="small-box-footer">{!! __('common.More info') !!} <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
@endcan