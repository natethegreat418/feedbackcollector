<div class="container">
  <div class="row">
    <div class="col-md-8 col-xs-12 form-intro">
      <div class="form-header">
        <h2>How Are you Feeling?</h2>
      </div>
      <h4>We really want to know! All responses are totally anonymous.</h4>
    </div>
  </div>
  <div class="row">
    <div class="formcontainer">
      <form action="collectfeedback.php" method="post" id="feedbackForm">
        <div class="row">
          <div class="col-xs-12 col-md-6">
            <label for="optradio">Select the emoji that best describes your honest feelings about work at the moment.</label>
          </div>
        </div>
        <div class="row container form-group" id="radiocontainer">
          <div class="col-xs-6 col-md-4">
            <label class="emojioption">
              <input type="radio" name="optradio" value="content" /><img src="Resources/Images/content.PNG" alt="content_emoji"><span class="optiontext">Content</span></label>
              <label class="emojioption">
                <input type="radio" name="optradio" value="love" /><img src="Resources/Images/loveit.png" alt="love emoji"><span class="optiontext">Love it!</span></label>
              </div>
              <div class="col-xs-6 col-md-4">
                <label class="emojioption">
                  <input type="radio" name="optradio" value="frustrated" /><img src="Resources/Images/frustrated.png" alt="frustrated emoji"><span class="optiontext">Frustrated!</span></label>

                  <label class="emojioption">
                    <input type="radio" name="optradio" value="meh" /><img src="Resources/Images/meh.PNG" alt="meh emoji"><span class="optiontext">Meh.</span></label>
                  </div>
                </div>
                <div class="row container">
                  <div class="form-group col-md-4">
                    <label for="departmentselect">Department (optional)</label>
                    <select id="departmentselect" name="departmentselect" class="form-control">
                      <option selected disabled hidden style='display: none' value=''></option>
                      <option>Sales</option>
                      <option>Marketing</option>
                      <option>Customer Service</option>
                      <option>Technology</option>
                      <option>Product Development</option>
                      <option>Operations</option>
                    </select>
                    <div class="form-group">
                      <label for="usercomments">Any additional comments? (optional)</label>
                      <textarea id="usercomments" name="usercomments" class="form-control" rows="3"></textarea>
                    </div>
                  </div>

                </div>
                <div class="row container">
                  <div class="col-md-4">
                    <input id="submit" type="submit" name="submitinfo" value="Submit" class="btn-block btn-lg btn-success" />
                  </div>
                </div>


              </form>
              <div id="feedback_modal" class="remodal footerprotect" data-remodal-id="modal" data-remodal-options="closeOnEscape: false, closeOnOutsideClick: false">
                <h2>Thank you for submitting your feedback!</h2>
                <h4>You've helped our team just get a little bit better. We encourage you to follow the link below to see aggregate, anonymous data on how other people are responding.</h4>
                <div class="modalButtonholder">
                  <a href="http://www.marcustechnologies.info/projects/insights/insights-home.php" class="btn remodal-confirm">What are other people saying?</a>
                  <a href="http://www.marcustechnologies.info/" class="btn remodal-cancel">Get me outta' here!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
