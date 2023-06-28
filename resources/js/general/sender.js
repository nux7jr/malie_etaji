export default async function sender(form) {
    if (form instanceof FormData) {
        const res = await fetch("/send_modal1", {
            method: "POST",
            body: form,
        });
        return res;
    } else {
        const res = await fetch("/send_modal1", {
            method: "POST",
            body: new FormData(form),
        });
        return res;
    }
}
