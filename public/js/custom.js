$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
        allWells = $('.setup-content'),
        allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
            $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-success').addClass('btn-default');
            $item.addClass('btn-success');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function () {
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url'], input[type='email'], input[type='number']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for (var i = 0; i < curInputs.length; i++) {
            if (!curInputs[i].validity.valid) {
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid) nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-success').trigger('click');
});



$(document).ready(function(){
    $('.icon').click(function(){
        $(this).toggleClass('aticon');
    });
});



function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});



var indexedu=0;
function appendEducationInfo() {
    indexedu++;
    $("#educationInfo").append('<div class="col-md-12 p-4 bg-white border-radius15px mb-4 edu-append" style="box-shadow: 1px 1px 14px #cddee4;">\
                                <div class="row">\
                                    <div class="form-group col-sm-4">\
                                        <label class="text-darkgray font-gothamlight fontsize12px">Level of Education</label>\
                                        <input type="text" required="required" name="education_information'+indexedu+'" class="border w-100 bg-gray border-radius25px outline-none font-montserrat fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Level of Education" />\
                                    </div>\
                                    <div class="form-group col-sm-4">\
                                        <label class="text-darkgray font-gothamlight fontsize12px">Education Type</label>\
                                        <input type="text" required="required" name="education_type'+indexedu+'" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px text-darkgray pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Education Type" />\
                                    </div>\
                                    <div class="form-group col-sm-4">\
                                        <label class="text-darkgray font-gothamlight fontsize12px">Field of Study</label>\
                                         <input type="text" required="required" name="field_of_study'+indexedu+'" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px text-darkgray pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Field of Study" />\
                                    </div>\
                                    <div class="form-group col-sm-4">\
                                        <label class="text-darkgray font-gothamlight fontsize12px">School</label>\
                                        <input type="text" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="School" name="school'+indexedu+'" />\
                                    </div>\
                                    <div class="form-group col-sm-4">\
                                        <label class="text-darkgray font-gothamlight fontsize12px">Country</label>\
                                        <input type="text" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Country" name="education_country'+indexedu+'" />\
                                    </div>\
                                    <div class="form-group col-sm-4">\
                                        <label class="text-darkgray font-gothamlight fontsize12px">City</label>\
                                        <input type="text" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="City" name="education_city'+indexedu+'" />\
                                    </div>\
                                    <div class="w-100">\
                                        <div class="form-group col-sm-4">\
                                            <label class="text-darkgray font-gothamlight fontsize12px">Time Period</label>\
                                            <label class="checkcustom fontsize12px font-gothamlight" style="color:#afafaf;">I currently go here\
                                                <input type="checkbox" name="time_period'+indexedu+'" value="yes" required>\
                                                <span class="checkmark"></span>\
                                            </label>\
                                        </div>\
                                    </div>\
                                    <div class="form-group col-sm-4">\
                                        <label class="text-darkgray font-gothamlight fontsize12px">From</label>\
                                        <input type="date" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Year" name="education_from_date'+indexedu+'" />\
                                    </div>\
                                    <div class="form-group col-sm-4">\
                                        <label class="text-darkgray font-gothamlight fontsize12px">To</label>\
                                        <input type="date" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Year" name="education_to_date'+indexedu+'" />\
                                    </div>\
                                    <div class="w-100">\
                                        <div class="form-group col-sm-4">\
                                            <label class="checkcustom fontsize12px font-gothamlight" style="color: #afafaf;">I do not want to enter my education at this time\
                                                <input type="checkbox">\
                                                <span class="checkmark"></span>\
                                            </label>\
                                        </div>\
                                    </div>\
                                </div>\
                                <div class="col-md-12 text-right d-flex justify-content-end p-0 position-relative" style="left: 16px;">\
                                 <button type="button" class="text-center border border-orange fontsize17px text-orange font-weight-light rounded-circle d-block bg-transparent" id="removeappend" style="width: 28px;height: 28px;line-height: 1.8;"><i class="fa fa-minus"></i></button>\
                                 </div>\
                            </div>');
}

var index=0;
function appendExperienceInfo() {

    index++;
    $("#experienceInfo").append('<div class="col-md-12 p-4 bg-white border-radius15px mb-4" style="box-shadow: 1px 1px 14px #cddee4;">\
                                <div class="row">\
                                    <div class="form-group col-sm-4">\
                                        <label class="text-darkgray font-gothamlight fontsize12px">Title</label>\
                                        <input type="text" required="required" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Title" name="title'+index+'" />\
                                    </div>\
                                    <div class="form-group col-sm-4">\
                                        <label class="text-darkgray font-gothamlightt fontsize12px">Organization </label>\
                                        <input type="text" class="border w-100 bg-gray border-radius25px text-darkgray outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Organization" name="organization'+index+'" />\
                                    </div>\
                                    <div class="form-group col-sm-4">\
                                        <label class="text-darkgray font-gothamlight fontsize12px">City</label>\
                                        <input type="text" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="City" name="experience_city'+index+'" />\
                                    </div>\
                                    <div class="form-group col-sm-4">\
                                        <label class="text-darkgray font-gothamlight fontsize12px">Country</label>\
                                        <input type="text" required="required" class="border w-100 bg-gray border-radius25px outline-none font-montserrat fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Country" name="experience_country'+index+'" />\
                                    </div>\
                                    <div class="w-100">\
                                        <div class="form-group col-sm-4">\
                                            <label class="text-darkgray font-gothamlight fontsize12px">Time Period</label>\
                                            <label class="checkcustom fontsize12px font-gothamlight" for="experience_time_period">I currently go here\
                                                <input type="checkbox" name="experience_time_period'+index+'" value="yes" id="experience_time_period">\
                                                <span class="checkmark"></span>\
                                            </label>\
                                        </div>\
                                    </div>\
                                    <div class="form-group col-sm-4">\
                                        <label class="text-darkgray font-gothamlight fontsize12px">From</label>\
                                        <input type="date" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Year" name="experience_from_date'+index+'" />\
                                    </div>\
                                    <div class="form-group col-sm-4">\
                                        <label class="text-darkgray font-gothamlight fontsize12px">To</label>\
                                        <input type="date" class="border w-100 bg-gray border-radius25px outline-none font-gothamlight fontsize13px pl-3 pr-3 pt-2 pb-2 border-gray lineheight2px" placeholder="Year" name="experience_to_date'+index+'" />\
                                    </div>\
                                    <div class="w-100">\
                                        <div class="form-group col-sm-4">\
                                            <label class="checkcustom fontsize12px font-gothamlight" style="color:#afafaf;">I do not want to enter my experience at this time\
                                                <input type="checkbox">\
                                                <span class="checkmark"></span>\
                                            </label>\
                                        </div>\
                                    </div>\
                                </div>\
                            </div>');
}
