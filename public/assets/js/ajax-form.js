const form = document.getElementById("contactForm");
const notyf = new Notyf();

form.addEventListener("submit", async (e) => {
    e.preventDefault();

    const formData = new FormData(form);

    try {
        const res = await fetch(window.contactFormUrl, {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
            },
            body: formData,
        });

        if (!res.ok) {
            const errorData = await res.json();

            if (res.status === 422 && errorData.errors) {
                const messages = Object.values(errorData.errors).flat();
                notyf.error(messages[0] || "Validation error.");
            } else {
                notyf.error(errorData.message || "Unknown error occurred.");
            }
            return;
        }

        const data = await res.json();
        if (data.success) {
            notyf.success("Message sent!");
            form.reset();
        } else {
            notyf.error(data.message || "Unexpected error.");
        }
    } catch (err) {
        notyf.error("Something went wrong.");
    }
});
