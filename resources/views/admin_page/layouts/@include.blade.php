{{-- Ajout --}}
@include('admin_page.partials.add.add-formation')
@include('admin_page.partials.add.add-formateur')
@include('admin_page.partials.add.add-users')

{{-- Suppression --}}
@include('admin_page.partials.add.delete-formateur')
@include('admin_page.partials.add.delete-formation')
@include('admin_page.partials.add.delete-users')

{{-- Affichages des éléments composant le sidebar --}}
@include('admin_page.partials.sidebar.sidebar-modal-analytics')
@include('admin_page.partials.sidebar.sidebar-modal-history')
@include('admin_page.partials.sidebar.sidebar-modal-reports')
@include('admin_page.partials.sidebar.sidebar-modal-users')
@include('admin_page.partials.sidebar.sidebar-modal-trainer')
@include('admin_page.partials.sidebar.sidebar-modal-users')
@include('admin_page.partials.sidebar.sidebar-modal-sale-list')


{{-- Right-section --}}
@include('admin_page.partials.right-section')

{{-- Modification --}}

