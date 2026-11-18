<?php

namespace Cachet\Settings;

use Spatie\LaravelSettings\Settings;

class AppSettings extends Settings
{
    public string $install_id;

    public ?string $name = 'Cachet';

    public ?string $about;

    public bool $show_site_name = false;

    public bool $show_about = true;

    public bool $show_support = true;

    public string $locale = 'en';

    public string $timezone = 'UTC';

    public bool $show_timezone = false;

    public bool $only_disrupted_days = false;

    public int $incident_days = 7;

    public ?int $refresh_rate;

    public bool $dashboard_login_link = true;

    public int $major_outage_threshold = 25;

    public bool $recent_incidents_only = false;

    public int $recent_incidents_days = 7;

    public bool $display_graphs = true;

    public bool $enable_external_dependencies = true;

    public bool $api_enabled = true;

    public bool $api_protected = false;

    public bool $mcp_enabled = false;

    public bool $mcp_protected = true;

    public bool $dynamic_favicon = false;

    public bool $show_component_group_status = true;

    public bool $show_component_tags = false;

    public bool $display_system_status = false;

    public int $system_status_days = self::SYSTEM_STATUS_MAX_DAYS;

    public const SYSTEM_STATUS_MIN_DAYS = 7;

    public const SYSTEM_STATUS_MAX_DAYS = 90;

    /**
     * Number of days shown by the system status uptime bars, kept within the supported range.
     */
    public function systemStatusDays(): int
    {
        return max(self::SYSTEM_STATUS_MIN_DAYS, min(self::SYSTEM_STATUS_MAX_DAYS, $this->system_status_days));
    }

    public static function group(): string
    {
        return 'app';
    }
}
