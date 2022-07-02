@props([
    'thead',
    'tfoot'
])
<div class="table-responsive">
    <table class="table table-striped gx-7">
        @isset($thead)
        <thead class="border">
            {{$thead}}
        </thead>
        @endisset
        <tbody class="border">
            {{$slot}}
        </tbody>
        @isset($tfoot)
        <tfoot class="border">
            {{$tfoot}}
        </tfoot>
        @endisset
    </table>
</div>
