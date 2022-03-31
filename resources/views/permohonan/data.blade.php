@extends('layouts.main')

@section('main')
    <div class="card">
        <div class="card-body">
            <table class="table-striped" id="dataPermohonan">
                <thead>
                    
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('#dataPermohonan').DataTable( {
            "order": [[ 1, "desc" ]]
        } );
    } );
</script>
@endpush