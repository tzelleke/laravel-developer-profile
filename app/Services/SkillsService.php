<?php

namespace App\Services;

class SkillsService
{
    /**
     * @return array<string, array<string>>
     */
    public function skillsets(): array
    {
        return [
            'Database' => ['SQLite', 'PostgreSQL', 'MySQL/MariaDB'],
            'Frontend' => ['Vue 3', 'Sass', 'Bootstrap CSS'],
            'Backend' => ['Laravel', 'FastAPI', 'Flask'],
            'Automation' => ['GitHub Actions', 'Ansible', 'GitLab'],
        ];
    }
}