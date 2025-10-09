export const loadScript = (src) => {
    return new Promise((resolve, reject) => {
        if (document.querySelector(`script[src="${src}"]`)) {
            resolve(); // Script is already loaded
            return;
        }

        const script = document.createElement("script");
        script.src = src;
        script.async = true;
        script.onload = resolve;
        script.onerror = reject;
        document.body.appendChild(script);
    });
};

export const loadScripts = async (scripts = []) => {

    for (const script of scripts) {
        try {
            await loadScript(script);
        } catch (error) {
            console.error(`Failed to load script: ${script}`, error);
        }
    }
};
