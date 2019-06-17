@extends('layouts.app')

@section('content')
<div class="main-panel">
        <!-- BEGIN : Main Content-->
        <div class="main-content">
          <div class="content-wrapper"><!--Calendar Starts-->
<section id="calendar">
  <div class="row">
    <div class="col-sm-12">
      <div class="content-header">Calendar</div>
      <p class="content-sub-header">This is the most basic example having navigation button to navigate next and
        previous months and today button. This basic
        example lists all the events on the calendar.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Default</h4>
          <p class="card-text">This is the most basic example having navigation button to navigate next and previous
            months and today button. This basic example lists all the events on the calendar.</p>

        </div>
        <div class="card-content">
          <div class="card-body">
            <div id='fc-default'></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">External Dragging</h4>
          <p class="card-text">Add extended dragging functionality with droppable option. Data can be attached to the
            element in order to specify its duration when dropped. A <code>Duration</code>-ish value can be provided.
            This can either be done via jQuery or via an <code>data-duration</code> attribute. This option operates
            with jQuery UI draggables. You must <code>download</code> the appropriate jQuery UI files and initialize
            a <code>draggable</code> element. Additionally, you must set the calendar's <code>droppable</code> option
            to <code>true</code>.</p>

        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <div id='external-events'>
                  <h4>Draggable Events</h4>
                  <div class="fc-events-container">
                    <div class='fc-event' data-color='#2D95BF'>All Day Event</div>
                    <div class='fc-event' data-color='#48CFAE'>Long Event</div>
                    <div class='fc-event' data-color='#50C1E9'>Meeting</div>
                    <div class='fc-event' data-color='#FB6E52'>Birthday party</div>
                    <div class='fc-event' data-color='#ED5564'>Lunch</div>
                    <div class='fc-event' data-color='#F8B195'>Conference Meeting</div>
                    <div class='fc-event' data-color='#6C5B7B'>Party</div>
                    <div class='fc-event' data-color='#355C7D'>Happy Hour</div>
                    <div class='fc-event' data-color='#547A8B'>Dance party</div>
                    <div class='fc-event' data-color='#3EACAB'>Dinner</div>
                    <p>
                      <input type='checkbox' id='drop-remove' />
                      <label for='drop-remove'>remove after drop</label>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-9">
                <div id='fc-external-drag'></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Calendar Ends-->

          </div>
        </div>

@endsection