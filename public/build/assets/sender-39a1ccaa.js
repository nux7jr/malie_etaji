async function s(e){return e instanceof FormData?await fetch("/send_modal1",{method:"POST",body:e}):await fetch("/send_modal1",{method:"POST",body:new FormData(e)})}export{s};
