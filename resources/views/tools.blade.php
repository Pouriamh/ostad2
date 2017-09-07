@extends('layouts.master')

@section('title', 'Tools')

@section('content')
<div class="container pd-9">
  <div class="row">
    <div class="text-center col-12">
      <h1>Tools</h1>
    </div>
  </div>


<!-- Content -->
  <div class="row">
    <div class="col-12">
      <p class="sp-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et semper ante. Phasellus et lorem quis velit placerat luctus. Nullam fermentum orci eu arcu dapibus, quis tristique neque fringilla. Morbi ultrices quam ex. Suspendisse dui ante, faucibus in tortor eget, ultrices rutrum magna. Donec eu imperdiet ligula. Aenean consectetur pharetra nunc in volutpat. Ut velit erat, rutrum sed eros ut, mollis porttitor neque.</p>
      <p>Vestibulum fringilla sapien sit amet elit condimentum varius. Nulla enim urna, mattis tempor vehicula at, vestibulum vitae nulla. Ut suscipit finibus sapien, at posuere sapien tincidunt at. Nam consequat massa et scelerisque vestibulum. Suspendisse potenti. Sed viverra dignissim suscipit. Etiam in suscipit felis.</p>
      <p>Sed posuere lorem at tempor volutpat. Nullam molestie diam velit, ut lobortis diam euismod quis. Donec quis eleifend diam. Cras et ante facilisis, semper arcu et, porttitor est. Ut pellentesque eget turpis ut aliquet. Proin sit amet condimentum risus. Morbi at leo turpis. Morbi in pulvinar tellus, in iaculis nibh. In auctor eu diam a faucibus. Praesent hendrerit tincidunt nulla, quis pharetra nulla euismod nec. Quisque sed nulla venenatis, laoreet quam in, tincidunt est. Nam scelerisque quam eu odio placerat, eu ornare arcu aliquet. In hac habitasse platea dictumst. Duis id molestie massa.</p>
    </div>
  </div>

<!-- Temperaments Table -->

  <div class="row sp-6">
    <div class="col-12">
      <h2>Temperaments</h2>
      <table class="table sp-2">
        <thead class="thead-default">
          <tr>
            <th class="col-temperament">Temperament</th>
            <th class="col-tuning">Tuning Frequencies</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Ostad Temperament</td>
            <td>Frequency listing...</td>
          </tr>
          <tr>
            <td>Pythagoras</td>
            <td>Frequency listing...</td>
          </tr>
          <tr>
            <td>Equal Temperament</td>
            <td>Frequency listing...</td>
          </tr>
          <tr>
            <td>Ormavi</td>
            <td>Frequency listing...</td>
          </tr>
          <tr>
            <td>Well Tempered</td>
            <td>Frequency listing...</td>
          </tr>
          <tr>
            <td>Just Temperament</td>
            <td>Frequency listing...</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

<!-- Terminology -->
  <div class="row sp-6">
    <div class="col-12">
      <h2>Terminology</h2>
      <table class="table sp-2">
        <thead class="thead-default">
          <tr>
            <th class="col-temperament">Term</th>
            <th class="col-tuning">Definition</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Gousheh</td>
            <td>Definition...</td>
          </tr>
          <tr>
            <td>Temperament</td>
            <td>Definition...</td>
          </tr>
          <tr>
            <td>Sentence</td>
            <td>Definition...</td>
          </tr>
          <tr>
            <td>Motif</td>
            <td>Definition...</td>
          </tr>
          <tr>
            <td>...</td>
            <td>...</td>
          </tr>
          <tr>
            <td>...</td>
            <td>...</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

<!-- Further Links -->
<div class="row sp-6">
  <div class="col-12">
    <h2>Further Resources</h2>
    <ul class="resources-list sp-2">
      <li><a href="">Link one</a><p>Summary of information available at link.</p></li>
      <li><a href="">Link two</a><p>Summary of information available at link.</p></li>
      <li><a href="">Link three</a><p>Summary of information available at link.</p></li>
    </ul>
  </div>
</div>

  </div>
@stop
