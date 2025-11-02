@extends('layout.dashboard-layout')

@section('title', 'Dashboard')

@section('content')
<p class="text-4xl text-center font-bold">Active <span class="text-sky-500">Events</span></p>
<div class="grid grid-cols-3 mt-15 gap-3">
    <x-dashboard-events-card href="/events/events-detail" date="19 October 2025" image="img/placeholder.jpg" price="335.000">Pura Bias Tugel a Temple in Peninsula Island</x-dashboard-events-card>
    <x-dashboard-events-card href="/events/events-detail" date="19 October 2025" image="img/placeholder.jpg" price="335.000">Pura Bias Tugel a Temple in Peninsula Island</x-dashboard-events-card>
    <x-dashboard-events-card href="/events/events-detail" date="19 October 2025" image="img/placeholder.jpg" price="335.000">Pura Bias Tugel a Temple in Peninsula Island</x-dashboard-events-card>
    <x-dashboard-events-card href="/events/events-detail" date="19 October 2025" image="img/placeholder.jpg" price="335.000">Pura Bias Tugel a Temple in Peninsula Island</x-dashboard-events-card>
    <x-dashboard-events-card href="/events/events-detail" date="19 October 2025" image="img/placeholder.jpg" price="335.000">Pura Bias Tugel a Temple in Peninsula Island</x-dashboard-events-card>
    <x-dashboard-events-card href="/events/events-detail" date="19 October 2025" image="img/placeholder.jpg" price="335.000">Pura Bias Tugel a Temple in Peninsula Island</x-dashboard-events-card>
</div>
@endsection