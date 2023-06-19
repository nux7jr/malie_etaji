export default async function sender(form) {
    const res = await fetch("url", {
        method: "POST",
        body: new FormData(form),
    });
    return res;
}
