type WayfinderDefinition = {
    url: string;
};

type WayfinderCallable = {
    definition?: WayfinderDefinition;
};

const normalizeSameHostSchemeRelativeUrl = (url: string): string => {
    if (typeof window === 'undefined' || !url.startsWith('//')) {
        return url;
    }

    if (window.location.port === '') {
        return url;
    }

    const parsedUrl = new URL(`${window.location.protocol}${url}`);

    if (parsedUrl.hostname !== window.location.hostname || parsedUrl.port !== '') {
        return url;
    }

    parsedUrl.port = window.location.port;

    return parsedUrl.toString();
};

const normalizeWayfinderExport = (candidate: unknown): void => {
    if (typeof candidate !== 'function') {
        return;
    }

    const definition = (candidate as WayfinderCallable).definition;

    if (!definition || typeof definition.url !== 'string') {
        return;
    }

    definition.url = normalizeSameHostSchemeRelativeUrl(definition.url);
};

export const normalizeWayfinderRouteDefinitions = (): void => {
    if (typeof window === 'undefined') {
        return;
    }

    const routeModules = import.meta.glob('../routes/**/*.ts', { eager: true });

    for (const moduleExports of Object.values(routeModules)) {
        for (const exportedValue of Object.values(
            moduleExports as Record<string, unknown>,
        )) {
            normalizeWayfinderExport(exportedValue);
        }
    }
};
