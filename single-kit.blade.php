@extends('layouts.app')

@section('content')
  <div class="pa-content pb-5">
    @include('template-parts.single.header')

    <div class="container pt-5">
      <div class="row justify-content-center">
        <section class="col-auto col-md-8">     
          <div class="mb-5 pb-4">
            <h2 class="mb-4"><?= __('Kit materials', 'iasd') ?></h2>

            @include('template-parts.single.list-kit-downloads', [
              'downloads' => get_field('downloads'),
            ])
          </div>
          
          @include('template-parts.single.related-posts', [
            'title' => __('Kit materials', 'iasd')
          ])
        </section>
      </div>
    </div>
  </div>
@endsection
