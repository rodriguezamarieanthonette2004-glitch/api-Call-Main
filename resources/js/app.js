export function apiUrl(path = '') {
	const base = import.meta.env.VITE_API_URL || 'http://127.0.0.1:8000';
	if (path && !path.startsWith('/')) path = '/' + path;
	return base.replace(/\/$/, '') + path;
}

export async function fetchStudents() {
	const res = await fetch(apiUrl('/api/students'));
	return res.json();
}

export async function createStudent(data) {
	const res = await fetch(apiUrl('/api/students'), {
		method: 'POST',
		headers: { 'Content-Type': 'application/json' },
		body: JSON.stringify(data),
	});
	return res.json();
}

// Expose helpers for browser console testing
if (typeof window !== 'undefined') {
	window.api = {
		apiUrl,
		fetchStudents,
		createStudent,
	};
}
