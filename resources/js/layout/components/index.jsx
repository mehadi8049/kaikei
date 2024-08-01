import React from 'react'

export default function index() {
  return (
    <>
    <div className="container-fluid" id="navbar">

        <div className="row">
            <div className="col-md-6 col-sm-12 col-xs-12">
                <h3 className="mob_header_section"><b>家計簿・会計 </b> -〈0173999110912〉
                    <button className="btn btn_yellow nav_btn btn_landscape_sm">紹介</button>
                </h3>
            </div>

            <div class="col-md-6 col-sm-12 col-xs-12 text-right">
				<button class="btn btn_yellow nav_btn btn_landscape_sm">集計表</button>
				<button class="btn btn-danger btn-sm nav_btn btn_landscape_sm">戻る</button>
			</div>

        </div>
        </div>
    </>
  )
}
