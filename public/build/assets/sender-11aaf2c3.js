async function s(e){return e instanceof FormData?await fetch("/send_modal",{method:"POST",body:e}):await fetch("/send_modal",{method:"POST",body:new FormData(e)})}export{s};
