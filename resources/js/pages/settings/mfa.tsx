import { Head } from '@inertiajs/react';
import Heading from '@/components/heading';
import { Badge } from '@/components/ui/badge';
import AppLayout from '@/layouts/app-layout';
import SettingsLayout from '@/layouts/settings/layout';
import type { BreadcrumbItem } from '@/types';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'MFA Settings',
        href: '/settings/mfa',
    },
];

type Props = {
    driver: string;
    mfaEnabled: boolean;
};

export default function MfaSettings({ driver, mfaEnabled }: Props) {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="MFA Settings" />

            <SettingsLayout>
                <div className="space-y-6">
                    <Heading
                        variant="small"
                        title="Multi-Factor Authentication"
                        description="MFA rollout is feature-flagged. This placeholder confirms account-level wiring is ready."
                    />

                    <div className="space-y-3 rounded-lg border p-4">
                        <div className="flex items-center gap-2">
                            <span className="text-sm font-medium">Driver:</span>
                            <Badge variant="secondary">{driver.toUpperCase()}</Badge>
                        </div>

                        <div className="flex items-center gap-2">
                            <span className="text-sm font-medium">Status:</span>
                            {mfaEnabled ? (
                                <Badge variant="default">Enabled</Badge>
                            ) : (
                                <Badge variant="outline">Disabled</Badge>
                            )}
                        </div>

                        <p className="text-sm text-muted-foreground">
                            Next step in a future phase: enrollment, confirmation,
                            recovery codes, and enforcement policies.
                        </p>
                    </div>
                </div>
            </SettingsLayout>
        </AppLayout>
    );
}
