<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="voting">
            <div class="upvote"></div>
            <p class="votes">7</p>
            <div class="downvote"></div>
          </div>
        
          <h5 class="modal-title post_heading" id="exampleModalLabel">{{ __('Will doing an online MSc in Computer Science help me get a job less than an in person one? ') }}</h5>
  
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
  
        <div class="card-header" style="padding-left: 3rem">
          <p class="posted_by">POSTED <span>7 HOURS AGO</span> BY : <a href="">Roxo</a>  |  &lt;&lt;15 Comments&gt;&gt;  |  &lt;&lt;15 Views&gt;&gt; <span class="badge badge-secondary">PHP</span> . <span class="badge badge-secondary">JAVASCRIPT</span></p>
        </div>
        <div class="modal-body">

          <div class="card">
            <div class="card-body">
              <p>{{ __("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.") }}</p>
            </div>
          </div>
        
          <x-commentsection />
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>