export default async function sender(form) {
    const res = await fetch("send_modal", {
        method: "POST",
        body: new FormData(form),
    });
    return res;
}
