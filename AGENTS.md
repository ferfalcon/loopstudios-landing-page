# AGENTS.md

## Project Overview

This project converts the Frontend Mentor Loopstudios landing page into a clean, reviewable WordPress site.

Use these files as the main source material:

- `frontend-mentor/index.html` for the original page content and semantic structure.
- `frontend-mentor/style-guide.md` for colors, typography, and layout reference.
- `frontend-mentor/design/Mobile.png`, `frontend-mentor/design/Tablet.png`, and `frontend-mentor/design/Desktop.png` for responsive layout targets.
- `frontend-mentor/design/Desktop-Active.png` for interactive states.
- `frontend-mentor/images/` for logos, icons, screenshots, and background assets.

The Figma design is the primary visual reference when available: `https://www.figma.com/design/kVIllx27N92tq5ZNXDS3JC/loopstudios-landing-page?node-id=1-3`

Keep `frontend-mentor/` as source/reference material. Do not edit those files unless the user explicitly asks for source material changes.

## Working style

- prefer baby steps over big jumps
- inspect existing files before editing
- match the local code style and patterns
- explain why a change is being made
- avoid speculative rewrites
- do not add complexity without a clear reason
- do not invent product rules that were not agreed
- prefer simple, explicit solutions over clever abstractions
- prefer code that is easy to justify in a code review or interview

When a task is large, split it into milestones and implement the smallest useful slice first.

Do not rename, move, or reorganize files unless the task requires it. Do not mix refactors with feature work unless necessary. Do not fix adjacent issues unless they block the requested task.

## Local Development

Use DDEV for local WordPress development.

Default local workflow:

- Use DDEV as the WordPress runtime.
- Prefer `ddev start` for starting the project.
- Prefer `ddev wp` for WordPress CLI tasks.
- Prefer DDEV-provided database and runtime tooling instead of custom local scripts.

Keep commits focused on project code and documentation:

- Commit custom theme files.
- Commit custom plugin files.
- Commit project documentation.
- Commit source assets that are intentionally part of the project.
- Do not commit WordPress core files, generated local runtime files, database dumps, caches, or machine-specific DDEV artifacts unless the user explicitly asks for them.

Before sharing or committing, check for credentials, tokens, secrets, and machine-specific paths.

## Package Management

Prefer `pnpm` whenever JavaScript tooling is needed.

Default package workflow:

- Use `pnpm install` for installing dependencies.
- Use `pnpm add` and `pnpm remove` for dependency changes.
- Use `pnpm run` for project scripts.
- Use `pnpm exec` for local package binaries.
- Use `pnpm dlx` for one-off package commands.

Do not introduce JavaScript build tooling unless it clearly improves the WordPress theme or plugin implementation. If WordPress core, theme files, existing assets, or a relevant installed skill can solve the problem cleanly, prefer that before adding dependencies.

If a tool's official documentation requires `npx`, use it only when the `pnpm` equivalent is not reliable, and note the reason in the implementation summary or README.

Keep dependency choices easy to explain in the README and in an interview.

## Agent Skills

Use installed agent skills when they match the current task.

Treat `https://www.skills.sh/` as the source for optional agent skills. Skills are workflow helpers for Codex and other agents; they are not WordPress runtime dependencies.

For new capability needs:

- Search for an existing skill before inventing a custom workflow.
- Prefer `pnpm dlx skills find <query>` when it works.
- Fall back to the documented `npx skills find <query>` command if needed.
- Do not install new skills without explicit user approval.
- If installation is approved, prefer `pnpm dlx skills add <package>` when supported.
- Fall back to the Skills CLI documented install command when the `pnpm` form is not reliable.

Keep skills usage task-specific. Do not add skills that do not directly help this project.

## Architecture Direction

Build a lightweight WordPress implementation with:

- A custom block theme named `Loopstudios Landing Page`.
- A companion plugin with a valid WordPress plugin header.

Use this target structure for WordPress project files:

```text
wp-content/
  themes/
    loopstudios-landing-page/
  plugins/
    loopstudios-landing-page/
```

Theme direction:

- Prefer WordPress-native block theme files.
- Use `theme.json` for global settings and design tokens where practical.
- Use templates, template parts, and patterns for page structure.
- Keep markup semantic and accessible.
- Use responsive CSS aligned with the provided mobile, tablet, and desktop designs.

Plugin direction:

- Keep the plugin small and purposeful.
- Include a clear plugin header.
- Add only functionality that belongs outside the theme.
- Avoid custom database tables, complex admin pages, and unrelated abstractions.

Avoid unnecessary build complexity. Add tooling only when it clearly improves maintainability or reviewer experience.

## Implementation Rules

Work in small, reviewable milestones.

Before editing:

- Inspect the relevant existing files.
- Check `git status --short`.
- Identify user changes and preserve them.
- Do not overwrite work you did not create.
- Before adding dependencies, check whether WordPress core, theme files, existing assets, or a relevant installed skill can solve the problem cleanly.

When implementing:

- Keep changes scoped to the current milestone.
- Prefer simple WordPress-native solutions.
- Use semantic HTML and accessible structure.
- Provide useful alt text for meaningful images.
- Use empty alt text only for decorative images.
- Ensure keyboard focus states are visible for links and buttons.
- Use WordPress escaping and sanitization functions in PHP-rendered output.
- Keep the front end responsive and usable on mobile, tablet, and desktop.
- Match the style guide: `frontend-mentor/style-guide.md`.
- Avoid large CSS/JS frameworks unless the user explicitly asks for one.
- Avoid over-engineering small client-style requirements.
- Keep dependency choices easy to explain in the README and interview context.

When documenting:

- Keep README updates concise and reviewer-friendly.
- Explain setup steps, implementation choices, time spent, and known limitations.
- Be transparent about tradeoffs without sounding defensive.

## Quality Baseline

The finished WordPress site should demonstrate:

- Clean WordPress conventions.
- A simple DDEV setup.
- A reviewable theme/plugin structure.
- Responsive layout fidelity to the provided designs.
- Accessible markup and interactions.
- Clear CSS organization.
- Practical scope control.
- No exposed credentials or secrets.

Minimum verification before considering a milestone complete:

- Confirm the site runs in DDEV.
- Confirm the active theme and plugin can be loaded in WordPress.
- Check the landing page at mobile, tablet, and desktop widths.
- Compare spacing, typography, images, and button states against the provided references.
- Confirm there are no obvious PHP warnings, broken assets, or console errors.
- Confirm `git diff` contains only intentional changes.

## Commit style

When suggesting commits, use Conventional Commits.

Examples:

- `feat(api): add create-link service`
- `fix(web): send credentials with session request`
- `refactor(api): extract spoo adapter`
- `test(api): cover link ownership rules`
- `docs: clarify local setup`
